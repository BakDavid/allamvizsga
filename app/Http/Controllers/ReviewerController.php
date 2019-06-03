<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Submission;
use App\Reviewer_Submission;
use App\Category;
use App\Submission_Cooperator;
use App\Cooperator;
use App\Point;
use App\Submission_Point;
use App\Reviewer_Point;
use Illuminate\Support\Facades\Hash;

class ReviewerController extends Controller
{

    public function __construct() {
        $this->middleware('reviewer');
    }

    public function review()
    {
        $reviewer_submissions = Reviewer_Submission::where('user_id',Auth::user()->id)->pluck('submission_id')->toArray();
        $submissions = Submission::whereIn('id',$reviewer_submissions)->get();

        return view('reviewer/review_list')->with('submissions',$submissions);
    }

    public function editProfile() {

        $category = Category::where('deleted','0')->get();

        return view('reviewer/editProfile')->with('category',$category);
    }

    public function editProfileUpdate(Request $request, $id) {
        $this->validate($request, [
            'first_name' => 'required|max:50|string',
            'last_name' => 'required|max:50|string',
            'birth_date' => 'nullable|max:255|date',
            'address' => 'nullable|max:100',
            'city' => 'nullable|max:100',
            'country' => 'nullable|max:100',
            'zipcode' => 'nullable|digits:6',
            'email' => 'email|required|max:50',
            'telephone' => 'required|digits_between:10,15',
            'university' => 'required|max:100',
            'department' => 'required|max:100',
        ]);

        $user = User::find($id);

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->birth_date = $request->input('birth_date');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->zipcode = $request->input('zipcode');
        $user->email = $request->input('email');
        $user->telephone = $request->input('telephone');
        $user->university = $request->input('university');
        $user->department = $request->input('department');


        $user->save();
        return redirect()->back()
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

            return redirect()->back()
                        ->withErrors(array('msg' => 'Password update succeded!'));
        }
    }

    public function submissiondetail($id)
    {
        $submission = Submission::find($id);
        $submission_cooperator = Submission_Cooperator::where('submission_id',$id)->get();

        foreach ($submission_cooperator as $coop) {
            $coop_id[] = $coop->cooperator_id;
        }
        $cooperator = Cooperator::findMany($coop_id)->where('deleted','0');

        $reviewer_point = Reviewer_Point::where('user_id',Auth::user()->id)->pluck('point_id')->toArray();
        $submission_point = Submission_Point::where('submission_id',$id)->pluck('point_id')->toArray();
        $current_point = array_intersect($reviewer_point,$submission_point);

        if($current_point == null)
        {
            $point = null;
        }
        else {
            $point = Point::where('id',$current_point)->first();
        }

        return view('reviewer/submission_detail')->with('submission',$submission)->with('cooperator', $cooperator)->with('point',$point);
    }

    public function downloadPDF($pdf)
    {
        return response()->download(storage_path("app/pdf/thesis/$pdf"));
    }

    public function reviewpost(Request $request,$id)
    {
        $this->validate($request, [
            'form_1' => 'required',
            'form_2' => 'required',
            'form_3' => 'required',
            'literature_1' => 'required',
            'literature_2' => 'required',
            'literature_3' => 'required',
            'info_collect_1' => 'required',
            'info_collect_2' => 'required',
            'info_collect_3' => 'required',
            'info_collect_4' => 'required',
            'conclusion_1' => 'required',
            'conclusion_2' => 'required',
            'conclusion_3' => 'required',
            'conclusion_4' => 'required',
            'opinion_1' => 'required',
            'opinion_2' => 'required',
            'opinion_3' => 'required',
            'opinion_4' => 'required',
            'abstract_1' => 'required',
            'abstract_2' => 'required',
            'abstract_2' => 'required',
        ]);

        $full_point = $request->input('form_1') +
                      $request->input('form_2') +
                      $request->input('form_3') +
                      $request->input('literature_1') +
                      $request->input('literature_2') +
                      $request->input('literature_3') +
                      $request->input('info_collect_1') +
                      $request->input('info_collect_2') +
                      $request->input('info_collect_3') +
                      $request->input('info_collect_4') +
                      $request->input('conclusion_1') +
                      $request->input('conclusion_2') +
                      $request->input('conclusion_3') +
                      $request->input('conclusion_4') +
                      $request->input('opinion_1') +
                      $request->input('opinion_2') +
                      $request->input('opinion_3') +
                      $request->input('opinion_4') +
                      $request->input('abstract_1') +
                      $request->input('abstract_2') +
                      $request->input('abstract_3');
        //Validalas resz is kell

        //Point handle
        $point = new Point();
        $point->form_1 = $request->input('form_1');
        $point->form_2 = $request->input('form_2');
        $point->form_3 = $request->input('form_3');
        $point->form_comment = $request->input('form_comment');
        $point->literature_1 = $request->input('literature_1');
        $point->literature_2 = $request->input('literature_2');
        $point->literature_3 = $request->input('literature_3');
        $point->literature_comment = $request->input('literature_comment');
        $point->info_collect_1 = $request->input('info_collect_1');
        $point->info_collect_2 = $request->input('info_collect_2');
        $point->info_collect_3 = $request->input('info_collect_3');
        $point->info_collect_4 = $request->input('info_collect_4');
        $point->info_collect_comment = $request->input('info_collect_comment');
        $point->conclusion_1 = $request->input('conclusion_1');
        $point->conclusion_2 = $request->input('conclusion_2');
        $point->conclusion_3 = $request->input('conclusion_3');
        $point->conclusion_4 = $request->input('conclusion_4');
        $point->conclusion_comment = $request->input('conclusion_comment');
        $point->opinion_1 = $request->input('opinion_1');
        $point->opinion_2 = $request->input('opinion_2');
        $point->opinion_3 = $request->input('opinion_3');
        $point->opinion_4 = $request->input('opinion_4');
        $point->opinion_comment = $request->input('opinion_comment');
        $point->abstract_1 = $request->input('abstract_1');
        $point->abstract_2 = $request->input('abstract_2');
        $point->abstract_3 = $request->input('abstract_3');
        $point->abstract_comment = $request->input('abstract_comment');
        $point->full_point = $full_point;
        $point->save();

        //Osszekottetesek kezelese meg
        //Submission_Point handle
        $submission_point = new Submission_Point();
        $submission_point->submission_id = $id;
        $submission_point->point_id = $point->id;
        $submission_point->save();

        //Reviewer_Point handle
        $reviewer_point = new Reviewer_Point();
        $reviewer_point->user_id = Auth::user()->id;
        $reviewer_point->point_id = $point->id;
        $reviewer_point->save();

        return redirect()->back()->withErrors(array('msg'=>'Submission reviewed successfully!'));
    }

    public function revieweditpost(Request $request,$id)
    {
        $reviewer_point = Reviewer_Point::where('user_id',Auth::user()->id)->pluck('point_id')->toArray();
        $submission_point = Submission_Point::where('submission_id',$id)->pluck('point_id')->toArray();
        $current_point = array_intersect($reviewer_point,$submission_point);

        $full_point = $request->input('form_1') +
                      $request->input('form_2') +
                      $request->input('form_3') +
                      $request->input('literature_1') +
                      $request->input('literature_2') +
                      $request->input('literature_3') +
                      $request->input('info_collect_1') +
                      $request->input('info_collect_2') +
                      $request->input('info_collect_3') +
                      $request->input('info_collect_4') +
                      $request->input('conclusion_1') +
                      $request->input('conclusion_2') +
                      $request->input('conclusion_3') +
                      $request->input('conclusion_4') +
                      $request->input('opinion_1') +
                      $request->input('opinion_2') +
                      $request->input('opinion_3') +
                      $request->input('opinion_4') +
                      $request->input('abstract_1') +
                      $request->input('abstract_2') +
                      $request->input('abstract_3');

        $point = Point::where('id',$current_point)->first();
        $point->form_1 = $request->input('form_1');
        $point->form_2 = $request->input('form_2');
        $point->form_3 = $request->input('form_3');
        $point->form_comment = $request->input('form_comment');
        $point->literature_1 = $request->input('literature_1');
        $point->literature_2 = $request->input('literature_2');
        $point->literature_3 = $request->input('literature_3');
        $point->literature_comment = $request->input('literature_comment');
        $point->info_collect_1 = $request->input('info_collect_1');
        $point->info_collect_2 = $request->input('info_collect_2');
        $point->info_collect_3 = $request->input('info_collect_3');
        $point->info_collect_4 = $request->input('info_collect_4');
        $point->info_collect_comment = $request->input('info_collect_comment');
        $point->conclusion_1 = $request->input('conclusion_1');
        $point->conclusion_2 = $request->input('conclusion_2');
        $point->conclusion_3 = $request->input('conclusion_3');
        $point->conclusion_4 = $request->input('conclusion_4');
        $point->conclusion_comment = $request->input('conclusion_comment');
        $point->opinion_1 = $request->input('opinion_1');
        $point->opinion_2 = $request->input('opinion_2');
        $point->opinion_3 = $request->input('opinion_3');
        $point->opinion_4 = $request->input('opinion_4');
        $point->opinion_comment = $request->input('opinion_comment');
        $point->abstract_1 = $request->input('abstract_1');
        $point->abstract_2 = $request->input('abstract_2');
        $point->abstract_3 = $request->input('abstract_3');
        $point->abstract_comment = $request->input('abstract_comment');
        $point->full_point = $full_point;
        $point->save();

        return redirect()->back()->withErrors(array('msg'=>'Submission review edited successfully!'));
    }

}
