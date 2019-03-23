<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Submission;
use App\Cooperator;
use App\Category;
use App\Submission_Cooperator;
use App\Submission_Conference;
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
        $this->middleware(['auth', 'verified']);
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
            'first_name' => 'required|max:50|string',
            'last_name' => 'required|max:50|string',
            'birth_date' => 'required|max:255|date',
            'gender' => 'required|max:6',
            'address' => 'required|max:100',
            'city' => 'required|max:100',
            'country' => 'required|max:100',
            'zipcode' => 'required|digits:6',
            'email' => 'email|required|max:50',
            'telephone' => 'required|digits_between:10,15',
            'university' => 'required|max:100',
            'department' => 'required|max:100',
            'facebook' => 'nullable|max:100|url',
            'google' => 'nullable|max:100|url',
            'twitter' => 'nullable|max:100|url',
            'linkedin' => 'nullable|max:100|url',
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
        return redirect('editProfile')
                    ->withErrors(array('msg' => 'Profile update succeded!'));
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

            return redirect('editProfile')
                        ->withErrors(array('msg' => 'Password update succeded!'));
        }
    }

    public function submission() {

        $categories = DB::table('categories')
                        ->select('id','category_name')
                        ->where('deleted','0')
                        ->orderby('category_name')
                        ->get();

        $conferences = DB::table('conferences')
                        ->select('id','name')
                        ->where('deleted','0')
                        ->whereDate('application_start','<',Carbon::now())
                        ->whereDate('thesis_upload_deadline','>',Carbon::now())
                        ->orderby('name')
                        ->get();

        return view('submitter_and_reviewer/submission')
                    ->with('categories',$categories)
                    ->with('conferences',$conferences);
    }

    public function submissioncreate(Request $request) {

        //Validation part
        $this->validate($request, [
            'first_name' => 'required|array|min:1',
            'first_name.*' => 'required|max:50|string',
            'last_name' => 'required|array|min:1',
            'last_name.*' => 'required|max:50|string',
            'student' => 'required|array|min:1',
            'student.*' => 'required',
            'birth_date' => 'required|array|min:1',
            'birth_date.*' => 'required|max:255|date',
            'gender' => 'required|array|min:1',
            'gender.*' => 'required|max:6',
            'address' => 'required|array|min:1',
            'address.*' => 'required|max:100',
            'city' => 'required|array|min:1',
            'city.*' => 'required|max:100',
            'country' => 'required|array|min:1',
            'country.*' => 'required|max:100',
            'zipcode' => 'required|array|min:1',
            'zipcode.*' => 'required|digits:6',
            'email' => 'required|array|min:1',
            'email.*' => 'email|required|max:50',
            'telephone' => 'required|array|min:1',
            'telephone.*' => 'required|digits_between:10,15',
            'university' => 'required|array|min:1',
            'university.*' => 'required|max:100',
            'department' => 'required|array|min:1',
            'department.*' => 'required|max:100',
            'facebook' => 'required|array|min:1',
            'facebook.*' => 'nullable|max:100|url',
            'google' => 'required|array|min:1',
            'google.*' => 'nullable|max:100|url',
            'twitter' => 'required|array|min:1',
            'twitter.*' => 'nullable|max:100|url',
            'linkedin' => 'required|array|min:1',
            'linkedin.*' => 'nullable|max:100|url',
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

        //Submission_Conference fill and save
        $submission_conference = new Submission_Conference();
        $submission_conference->submission_id = $submission_id;
        $submission_conference->conference_id = $request->input('conference');
        $submission_conference->remember_token = $request->input('_token');
        $submission_conference->save();

        return redirect('submission')
                ->withErrors(array('msg' => 'Submission created successfully!'));
    }

    public function submissionlist() {

        $submission = DB::table('submissions')
                        ->where('submissions.deleted','0')
                        ->join('submission__conferences','submissions.id','=','submission__conferences.submission_id')
                        ->join('conferences','submission__conferences.conference_id','=','conferences.id')
                        ->select('submissions.*','conferences.name')
                        ->paginate(1000);

        return view('submitter_and_reviewer/submission_list')->with('submission', $submission); //->with('categories',$categories)->with('conferences',$conferences);

    }

    public function submissiondetail($id)
    {
        $submission = Submission::find($id);
        $submission_cooperator = Submission_Cooperator::where('submission_id',$id)->get();

        foreach ($submission_cooperator as $coop) {
            $coop_id[] = $coop->cooperator_id;
        }
        $cooperator = Cooperator::findMany($coop_id)->where('deleted','0');

        return view('submitter_and_reviewer/submission_detail')->with('submission',$submission)->with('cooperator', $cooperator);
    }

    public function submissiondelete($id)
    {
        $submission = Submission::find($id);
        $submission->deleted = "1";
        $submission->save();

        return redirect()->route('submissionlist')->withErrors(array('msg' => 'Deleted submission named: ' . $submission->title . ' successfully!'));
    }

    public function submissionedit($id)
    {
        $submission = Submission::find($id);
        $submission_cooperator = Submission_Cooperator::where('submission_id',$id)->get();

        foreach ($submission_cooperator as $coop) {
            $coop_id[] = $coop->cooperator_id;
        }
        $cooperator = Cooperator::findMany($coop_id)->where('deleted',"0");

        $categories = DB::table('categories')->select('id','category_name')->orderby('category_name')->get();
        $conferences = DB::table('conferences')->select('id','name')->whereDate('application_start','<',Carbon::now())->
                whereDate('thesis_upload_deadline','>',Carbon::now())->orderby('name')->get();

        $submission_conference = Submission_Conference::where('submission_id',$id)->first();

        return view('submitter_and_reviewer/submission_edit')->with('submission',$submission)->with('cooperator',$cooperator)->
            with('categories',$categories)->with('conferences',$conferences)->with('submission_conference',$submission_conference);
    }

    public function submissioneditpost(Request $request,$id) {

        $this->validate($request, [
            'first_name' => 'required|array|min:1',
            'first_name.*' => 'required|max:50|string',
            'last_name' => 'required|array|min:1',
            'last_name.*' => 'required|max:50|string',
            'student' => 'required|array|min:1',
            'student.*' => 'required',
            'birth_date' => 'required|array|min:1',
            'birth_date.*' => 'required|max:255|date',
            'gender' => 'required|array|min:1',
            'gender.*' => 'required|max:6',
            'address' => 'required|array|min:1',
            'address.*' => 'required|max:100',
            'city' => 'required|array|min:1',
            'city.*' => 'required|max:100',
            'country' => 'required|array|min:1',
            'country.*' => 'required|max:100',
            'zipcode' => 'required|array|min:1',
            'zipcode.*' => 'required|digits:6',
            'email' => 'required|array|min:1',
            'email.*' => 'email|required|max:50',
            'telephone' => 'required|array|min:1',
            'telephone.*' => 'required|digits_between:10,15',
            'university' => 'required|array|min:1',
            'university.*' => 'required|max:100',
            'department' => 'required|array|min:1',
            'department.*' => 'required|max:100',
            'facebook' => 'required|array|min:1',
            'facebook.*' => 'nullable|max:100|url',
            'google' => 'required|array|min:1',
            'google.*' => 'nullable|max:100|url',
            'twitter' => 'required|array|min:1',
            'twitter.*' => 'nullable|max:100|url',
            'linkedin' => 'required|array|min:1',
            'linkedin.*' => 'nullable|max:100|url',
            'title' => 'required|max:50',
            'category' => 'required',
            'key_words' => 'required|max:100',
            'abstract' => 'required|max:255',
            'thesis_name_upload' => 'nullable',
            'comment' => 'required|max:255',
            'conference' => 'required',
        ]);

        $submission = Submission::find($id);
        $submission->title = $request->input('title');
        $submission->key_words = $request->input('key_words');
        $submission->abstract = $request->input('abstract');
        $submission->title = $request->input('title');
        $submission->comment = $request->input('comment');
        $submission->category_id = $request->input('category');

        //File handle if there is file or not
        if ($request->hasFile('thesis_name_upload')) {
            $file = $request->file('thesis_name_upload');
            $name = uniqid() . time() . $file->getClientOriginalName();
            $destinationPath = '/pdf/thesis/' . $name;
            Storage::put($destinationPath,file_get_contents($file));

            $submission->thesis_name_upload = $name;
        }

        $submission->save();

        $submission_conference = Submission_Conference::where('submission_id',$id)->first();
        $submission_conference->conference_id = $request->input('conference');
        $submission_conference->save();

        //Cooperator handle part
        $submission_cooperator = Submission_Cooperator::where('deleted','0')->where('submission_id',$id)->get();
        for($i = 0; $i < count($request->input('first_name')); $i++)
        {
            //Handle those cooperators, which are in database
            if($i<count($submission_cooperator))
            {
                $cooperator = Cooperator::find($submission_cooperator[$i]->cooperator_id);

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

                $cooperator->save();
            }
            //Handle new cooperators, which are currently being added
            else
            {
                $cooperator = new Cooperator();
                $new_submission_cooperator = new Submission_Cooperator();

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
                $new_submission_cooperator->submission_id = $id;
                $new_submission_cooperator->cooperator_id = $cooperator_id;
                $new_submission_cooperator->remember_token = $request->input('_token');
                $new_submission_cooperator->save();
            }
        }

        return redirect()
                ->back()
                ->withErrors(array('msg' => 'Updated submission successfully!'));
    }

    public function cooperatordelete($id)
    {
        $cooperator = Cooperator::find($id);
        $cooperator->deleted = "1";
        $cooperator->save();

        $submission_cooperator = Submission_Cooperator::where('cooperator_id',$id)->first();
        $submission_cooperator_delete = Submission_Cooperator::find($submission_cooperator->id);
        $submission_cooperator_delete->deleted = "1";
        $submission_cooperator_delete->save();

        return redirect()
                ->back()
                ->withErrors(array('msg' => 'Deleted coauthor named: ' . $cooperator->first_name . " " . $cooperator->last_name . ' successfully!'));
    }

    public function downloadPDF($pdf)
    {
        return response()->download(storage_path("app/pdf/thesis/$pdf"));
    }

    public function conferenceparticipationlist()
    {
        $conferences = DB::table('users')
                    ->where('users.id','=',Auth::user()->id)
                    ->join('user__submissions','users.id','=','user__submissions.user_id')
                    ->join('submission__conferences','user__submissions.submission_id','=','submission__conferences.submission_id')
                    ->join('conferences','submission__conferences.conference_id','=','conferences.id')
                    ->select('conferences.*')
                    ->paginate(1000);

        return view('submitter_and_reviewer/conference_participation_list')
                    ->with('conferences',$conferences);
    }
}
