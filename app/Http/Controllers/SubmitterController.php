<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Submission;
use App\Cooperator;
use App\Category;
use App\Submission_Cooperator;
use App\User_Submission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Storage;
use Carbon\Carbon;

class SubmitterController extends GuestController {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('submitter_and_reviewer/home');
    }

    public function editProfile() {
        return view('submitter_and_reviewer/editProfile');
    }

    public function editProfileUpdate(Request $request, $id) {
        $this->validate($request, [
            'first_name' => 'required|max:30|string',
            'last_name' => 'required|max:30|string',
            'birth_date' => 'required|max:255|date',
            'gender' => 'required|max:6',
            'address' => 'required|max:30',
            'city' => 'required|max:30',
            'country' => 'required|max:30',
            'zipcode' => 'required|digits:6',
            'email' => 'email|required|max:30',
            'telephone' => 'required|digits_between:10,15',
            'university' => 'required|max:30',
            'department' => 'required|max:30',
            'facebook' => 'nullable|max:50|url',
            'google' => 'nullable|max:50|url',
            'twitter' => 'nullable|max:50|url',
            'linkedin' => 'nullable|max:50|url',
        ]);

        $user = User::find($id);

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->birth_date = $request->input('birth_date');
        $user->gender = $request->input('gender');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->zipcode = $request->input('zipcode');
        $user->email = $request->input('email');
        $user->telephone = $request->input('telephone');
        $user->university = $request->input('university');
        $user->department = $request->input('department');
        $user->facebook = $request->input('facebook');
        $user->google = $request->input('google');
        $user->twitter = $request->input('twitter');
        $user->linkedin = $request->input('linkedin');


        $user->save();
        return redirect('editProfile')->withErrors(array('msg' => 'Profile update succeded!'));
    }

    public function editProfilePasswordChange(Request $request, $id) {

        $this->validate($request, [
            'current_password' => 'required|max:255',
            'password' => 'required|max:255|confirmed',
            'g-recaptcha-response' => 'required',
        ]);

        $user = User::find($id);

        $current_password = $request->input('current_password');
        $new_password = $request->input('password');

        if (!Hash::check($current_password, $user->password)) {
            return back()->withErrors(array('current_password' => 'Please specify the good current password'));
        } else {
            $user->password = Hash::make($new_password);
            $user->save();

            return redirect('editProfile')->withErrors(array('msg' => 'Password update succeded!'));
        }
    }

    public function submission() {
        
        $categories = DB::table('categories')->select('id','category_name')->get();
        $conferences = DB::table('conferences')->select('id','name')->whereDate('submission_send_start','<',Carbon::now())->
                whereDate('submission_send_end','>',Carbon::now())->get();
        
        return view('submitter_and_reviewer/submission')->with('categories',$categories)->with('conferences',$conferences);
    }

    public function submissioncreate(Request $request) {

        //Validation part
        $this->validate($request, [
            'first_name' => 'required|array|min:1',
            'first_name.*' => 'required|max:30|string',
            'last_name' => 'required|array|min:1',
            'last_name.*' => 'required|max:30|string',
            'student' => 'required|array|min:1',
            'student.*' => 'required',
            'birth_date' => 'required|array|min:1',
            'birth_date.*' => 'required|max:255|date',
            'gender' => 'required|array|min:1',
            'gender.*' => 'required|max:6',
            'address' => 'required|array|min:1',
            'address.*' => 'required|max:30',
            'city' => 'required|array|min:1',
            'city.*' => 'required|max:30',
            'country' => 'required|array|min:1',
            'country.*' => 'required|max:30',
            'zipcode' => 'required|array|min:1',
            'zipcode.*' => 'required|digits:6',
            'email' => 'required|array|min:1',
            'email.*' => 'email|required|max:30',
            'telephone' => 'required|array|min:1',
            'telephone.*' => 'required|digits_between:10,15',
            'university' => 'required|array|min:1',
            'university.*' => 'required|max:30',
            'department' => 'required|array|min:1',
            'department.*' => 'required|max:30',
            'facebook' => 'required|array|min:1',
            'facebook.*' => 'nullable|max:50|url',
            'google' => 'required|array|min:1',
            'google.*' => 'nullable|max:50|url',
            'twitter' => 'required|array|min:1',
            'twitter.*' => 'nullable|max:50|url',
            'linkedin' => 'required|array|min:1',
            'linkedin.*' => 'nullable|max:50|url',
            'title' => 'required|max:50',
            'category' => 'required',
            'key_words' => 'required|max:100',
            'abstract' => 'required|max:255',
            'thesis_name_upload' => 'required',
            'comment' => 'required|max:255',
            'conference' => 'required',
        ]);

        //New models
        $submission = new Submission();
        $user_submission = new User_Submission();

        //Submission fill and save
        $submission->title = $request->input('title');
        $submission->category_id = $request->input('category');
        $submission->key_words = $request->input('key_words');
        $submission->abstract = $request->input('abstract');
        $submission->thesis_name_upload = $request->input('file');
        $submission->comment = $request->input('comment');
        $submission->remember_token = $request->input('_token');

        //File handle
        if ($request->hasFile('thesis_name_upload')) {
            $file = $request->file('thesis_name_upload');
            $name = uniqid() . time() . $file->getClientOriginalName();
            $destinationPath = '/pdf/thesis/' . $name;
            Storage::put($destinationPath,file_get_contents($file));

            $submission->thesis_name_upload = $name;
        }

        $submission->save();
        $submission_id = $submission->id;

        //Cooperator fill and save
        for ($i = 0; $i < count($request->input('first_name')); $i++) {

            $cooperator = new Cooperator();
            $submission_cooperator = new Submission_Cooperator();

            $cooperator->first_name = $request->input('first_name')[$i];
            $cooperator->last_name = $request->input('last_name')[$i];
            $cooperator->student = $request->input('student')[$i];
            $cooperator->birth_date = $request->input('birth_date')[$i];
            $cooperator->gender = $request->input('gender')[$i];
            $cooperator->address = $request->input('address')[$i];
            $cooperator->city = $request->input('city')[$i];
            $cooperator->country = $request->input('country')[$i];
            $cooperator->zipcode = $request->input('zipcode')[$i];
            $cooperator->email = $request->input('email')[$i];
            $cooperator->telephone = $request->input('telephone')[$i];
            $cooperator->university = $request->input('university')[$i];
            $cooperator->department = $request->input('department')[$i];
            $cooperator->facebook = $request->input('facebook')[$i];
            $cooperator->google = $request->input('google')[$i];
            $cooperator->twitter = $request->input('twitter')[$i];
            $cooperator->linkedin = $request->input('linkedin')[$i];
            $cooperator->remember_token = $request->input('_token');

            $cooperator->save();
            $cooperator_id = $cooperator->id;

            //Submission_Cooperator fill and save
            $submission_cooperator->submission_id = $submission_id;
            $submission_cooperator->cooperator_id = $cooperator_id;
            $submission_cooperator->remember_token = $request->input('_token');
            $submission_cooperator->save();
        }

        //User_Submission fill and save
        $user_id = Auth::user()->id;
        $user_submission->user_id = $user_id;
        $user_submission->submission_id = $submission_id;
        $user_submission->remember_token = $request->input('_token');
        $user_submission->save();

        //Submission_Conference tabla is kell s majd oda betenni a conferencet
        

        return redirect('submission');
    }
    
    public function submissionlist() {

        $submission = DB::table('submissions')->paginate(1000);

        return view('submitter_and_reviewer/submission_list')->with('submission', $submission); //->with('categories',$categories)->with('conferences',$conferences);

    }
    
    public function submissiondetail($id)
    {
        $submission = Submission::find($id);
        //dd($submission);
        
        return view('submitter_and_reviewer/submission_detail')->with('submission',$submission);
    }
}
