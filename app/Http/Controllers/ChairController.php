<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Page;
use App\Conference;
use App\Submission;
use App\Submission_Cooperator;
use App\Cooperator;
use App\Submission_Conference;
use App\Category;
use App\Reviewer_Submission;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Mail;
use Storage;

class ChairController extends Controller {

    public function __construct() {
        $this->middleware('chair');
    }

    public function overview()
    {
        return view('chair/overview');
    }

    public function pages()
    {
        $pages = Page::get();

        return view('chair/pages')->with('pages', $pages);
    }

    public function pageedit($id)
    {
        $pages = Page::where('id',$id)->first();

        return view('chair/page_edit')->with('pages', $pages);
    }

    public function pageeditpost(Request $request,$id)
    {
        $current_chair = Auth::user()->first_name . " " . Auth::user()->last_name;

        $pages = Page::where('id',$id)->first();
        $pages->pages_content = $request->input('page_textarea');
        $pages->last_updated_by = $current_chair;
        $pages->save();

        return redirect('pages')->withErrors(array('msg' => $pages->pages . ' updated successfully!'));
    }

    public function conferences()
    {
        $conferences = Conference::where('deleted','0')->get();

        return view('chair/conferences')->with('conferences',$conferences);
    }

    public function conferencescreate()
    {
        return view('chair/conferences_create');
    }

    public function conferencescreatepost(Request $request)
    {
        //Validalas resz
        $this->validate($request, [
            'name' => 'required|max:50|string',
            'application_start' => 'required|max:255|date',
            'application_deadline' => 'required|max:255|date',
            'abstract_upload_deadline' => 'required|max:100|date',
            'thesis_upload_deadline' => 'required|max:100|date',
            'conference_day' => 'required|max:100|date',
            'room' => 'nullable',
            'university' => 'required|max:50',
            'address' => 'required|max:100',
            'city' => 'required|max:100',
            'country' => 'required|max:100',
            'zipcode' => 'nullable|digits:6',
            'comment' => 'nullable|max:3000',
            'max_participants' => 'nullable|max:11',
        ]);

        //A beallitasi datumok lekezelese
        if($request->input('application_start')>$request->input('application_deadline'))
        {
            if($request->input('application_deadline')>$request->input('abstract_upload_deadline'))
            {
                if($request->input('abstract_upload_deadline')>$request->input('thesis_upload_deadline'))
                {
                    return back()->withErrors(array(
                        'thesis_upload_deadline' => 'The thesis upload deadline must be greater than the abstract upload deadline!',
                        'abstract_upload_deadline' => 'The abstract upload deadline must be greater than the application deadline!',
                        'application_deadline' => 'The application deadline must be greater than the application start date!'));
                }
                else {
                    return back()->withErrors(array(
                        'application_deadline' => 'The application deadline must be greater than the application start date!',
                        'abstract_upload_deadline' => 'The abstract upload deadline must be greater than the application deadline!'));
                }
            }
            else {
                return back()->withErrors(array('application_deadline' => 'The application deadline must be greater than the application
                    start date!'));
            }
        }
        else {
            if($request->input('application_deadline')>$request->input('abstract_upload_deadline'))
            {
                if($request->input('abstract_upload_deadline')>$request->input('thesis_upload_deadline'))
                {
                    return back()->withErrors(array(
                        'thesis_upload_deadline' => 'The thesis upload deadline must be greater than the abstract upload deadline!',
                        'abstract_upload_deadline' => 'The abstract upload deadline must be greater than the application deadline!'));
                }
                else {
                    return back()->withErrors(array(
                        'abstract_upload_deadline' => 'The abstract upload deadline must be greater than the application deadline!'));
                }
            }
        }

        if($request->input('thesis_upload_deadline')>$request->input('conference_day'))
        {
            return back()->withErrors(array(
                'conference_day' => 'The conference day must be greater than the thesis upload deadline!'));
        }


        $conferences = new Conference();
        $conferences->name = $request->input('name');
        $conferences->application_start = $request->input('application_start');
        $conferences->application_deadline = $request->input('application_deadline');
        $conferences->abstract_upload_deadline = $request->input('abstract_upload_deadline');
        $conferences->thesis_upload_deadline = $request->input('thesis_upload_deadline');
        $conferences->conference_day = $request->input('conference_day');
        $conferences->room = $request->input('room');
        $conferences->university = $request->input('university');
        $conferences->address = $request->input('address');
        $conferences->city = $request->input('city');
        $conferences->country = $request->input('country');
        $conferences->zipcode = $request->input('zipcode');
        $conferences->comment = $request->input('comment');
        $conferences->max_participants = $request->input('max_participants');
        $conferences->save();

        return redirect('chairconferences')->withErrors(array('msg' => $conferences->name . ' successfully created!'));
    }

    public function conferencesedit($id)
    {
        $conferences = Conference::where('id',$id)->first();

        return view('chair/conferences_edit')->with('conferences', $conferences);
    }

    public function conferenceseditpost(Request $request,$id)
    {
        //Validalas resz
        $this->validate($request, [
            'name' => 'required|max:50|string',
            'application_start' => 'required|max:255|date',
            'application_deadline' => 'required|max:255|date',
            'abstract_upload_deadline' => 'required|max:100|date',
            'thesis_upload_deadline' => 'required|max:100|date',
            'conference_day' => 'required|max:100|date',
            'room' => 'nullable',
            'university' => 'required|max:50',
            'address' => 'required|max:100',
            'city' => 'required|max:100',
            'country' => 'required|max:100',
            'zipcode' => 'nullable|digits:6',
            'comment' => 'nullable|max:3000',
            'max_participants' => 'nullable|max:11',
        ]);

        //A beallitasi datumok lekezelese
        if($request->input('application_start')>$request->input('application_deadline'))
        {
            if($request->input('application_deadline')>$request->input('abstract_upload_deadline'))
            {
                if($request->input('abstract_upload_deadline')>$request->input('thesis_upload_deadline'))
                {
                    return back()->withErrors(array(
                        'thesis_upload_deadline' => 'The thesis upload deadline must be greater than the abstract upload deadline!',
                        'abstract_upload_deadline' => 'The abstract upload deadline must be greater than the application deadline!',
                        'application_deadline' => 'The application deadline must be greater than the application start date!'));
                }
                else {
                    return back()->withErrors(array(
                        'application_deadline' => 'The application deadline must be greater than the application start date!',
                        'abstract_upload_deadline' => 'The abstract upload deadline must be greater than the application deadline!'));
                }
            }
            else {
                return back()->withErrors(array('application_deadline' => 'The application deadline must be greater than the application
                    start date!'));
            }
        }
        else {
            if($request->input('application_deadline')>$request->input('abstract_upload_deadline'))
            {
                if($request->input('abstract_upload_deadline')>$request->input('thesis_upload_deadline'))
                {
                    return back()->withErrors(array(
                        'thesis_upload_deadline' => 'The thesis upload deadline must be greater than the abstract upload deadline!',
                        'abstract_upload_deadline' => 'The abstract upload deadline must be greater than the application deadline!'));
                }
                else {
                    return back()->withErrors(array(
                        'abstract_upload_deadline' => 'The abstract upload deadline must be greater than the application deadline!'));
                }
            }
        }

        if($request->input('thesis_upload_deadline')>$request->input('conference_day'))
        {
            return back()->withErrors(array(
                'conference_day' => 'The conference day must be greater than the thesis upload deadline!'));
        }

        $conferences = Conference::where('id',$id)->first();
        $conferences->name = $request->input('name');
        $conferences->application_start = $request->input('application_start');
        $conferences->application_deadline = $request->input('application_deadline');
        $conferences->abstract_upload_deadline = $request->input('abstract_upload_deadline');
        $conferences->thesis_upload_deadline = $request->input('thesis_upload_deadline');
        $conferences->conference_day = $request->input('conference_day');
        $conferences->room = $request->input('room');
        $conferences->university = $request->input('university');
        $conferences->address = $request->input('address');
        $conferences->city = $request->input('city');
        $conferences->country = $request->input('country');
        $conferences->zipcode = $request->input('zipcode');
        $conferences->comment = $request->input('comment');
        $conferences->max_participants = $request->input('max_participants');
        $conferences->save();

        return redirect('chairconferences')->withErrors(array('msg' => $conferences->name . ' updated successfully!'));
    }

    public function conferencesdelete($id)
    {
        $conferences = Conference::find($id)->first();
        $conferences->deleted = '1';
        $conferences->save();

        return redirect('chairconferences')->withErrors(array('msg' => $conferences->name . ' deleted successfully!'));
    }

    public function submissions()
    {
        $submission = Submission::where('submissions.deleted','0')
                                ->join('submission__conferences','submissions.id','=','submission__conferences.submission_id')
                                ->join('conferences','submission__conferences.conference_id','=','conferences.id')
                                ->select('submissions.*','conferences.name')
                                ->get();

        return view('chair/submissions')->with('submission',$submission);
    }

    public function submissionsedit($id)
    {
        $submission = Submission::where('id',$id)->first();

        $submission_cooperator = Submission_Cooperator::where('submission_id',$id)->get();

        foreach ($submission_cooperator as $coop) {
            $coop_id[] = $coop->cooperator_id;
        }
        $cooperator = Cooperator::findMany($coop_id)->where('deleted',"0");

        $categories = DB::table('categories')
                            ->select('id','category_name')
                            ->orderby('category_name')
                            ->get();

        $selected_conferences = Conference::where('thesis_upload_deadline','>',Carbon::now())->get();

        $conferences = DB::table('conferences')
                            ->select('conferences.*')
                            ->join('submission__conferences','submission__conferences.conference_id','=','conferences.id')
                            ->where('submission__conferences.submission_id','=',$id)
                            ->first();
        //dd($selected_conferences);
        //dd($conferences);

        return view('chair/submissions_edit')->with('submission',$submission)->with('cooperator',$cooperator)
        ->with('categories',$categories)->with('selected_conferences',$selected_conferences)->with('conferences',$conferences);
    }

    public function submissionseditpost(Request $request,$id)
    {
        //Submission validalas resz
        $this->validate($request, [
            'first_name' => 'required|array|min:1',
            'first_name.*' => 'required|max:50|string',
            'last_name' => 'required|array|min:1',
            'last_name.*' => 'required|max:50|string',
            'birth_date' => 'required|array|min:1',
            'birth_date.*' => 'nullable|max:255|date',
            'address' => 'required|array|min:1',
            'address.*' => 'nullable|max:100',
            'city' => 'required|array|min:1',
            'city.*' => 'nullable|max:100',
            'country' => 'required|array|min:1',
            'country.*' => 'nullable|max:100',
            'zipcode' => 'required|array|min:1',
            'zipcode.*' => 'nullable|digits:6',
            'email' => 'required|array|min:1',
            'email.*' => 'email|required|max:50',
            'telephone' => 'required|array|min:1',
            'telephone.*' => 'required|digits_between:10,15',
            'university' => 'required|array|min:1',
            'university.*' => 'required|max:100',
            'department' => 'required|array|min:1',
            'department.*' => 'required|max:100',
            'title' => 'required|max:50',
            'key_words' => 'max:100',
            'abstract' => 'max:255',
            'thesis_name_upload' => 'nullable',
            'comment' => 'max:255',
        ]);

        //Submission handle
        $submission = Submission::where('id',$id)->first();
        $submission->title = $request->input('title');
        $submission->key_words = $request->input('key_words');
        $submission->abstract = $request->input('abstract');
        $submission->comment = $request->input('comment');
        $submission->category_id = $request->input('category');

        //File handle
        if ($request->hasFile('thesis_name_upload')) {
            $file = $request->file('thesis_name_upload');
            $name = uniqid() . time() . $file->getClientOriginalName();
            $destinationPath = '/pdf/thesis/' . $name;
            Storage::put($destinationPath,file_get_contents($file));

            $submission->thesis_name_upload = $name;
        }

        $submission->save();

        //Cooperator handle
        $submission_cooperator = Submission_Cooperator::where('deleted','0')->where('submission_id',$id)->get();

        for($i = 0; $i < count($request->input('first_name')); $i++)
        {
            //Handle those cooperators, which are in database
            if($i<count($submission_cooperator))
            {
                $cooperator = Cooperator::find($submission_cooperator[$i]->cooperator_id);

                $cooperator->first_name = $request->input('first_name')[$i];
                $cooperator->last_name = $request->input('last_name')[$i];
                $cooperator->birth_date = $request->input('birth_date')[$i];
                $cooperator->address = $request->input('address')[$i];
                $cooperator->city = $request->input('city')[$i];
                $cooperator->country = $request->input('country')[$i];
                $cooperator->zipcode = $request->input('zipcode')[$i];
                $cooperator->email = $request->input('email')[$i];
                $cooperator->telephone = $request->input('telephone')[$i];
                $cooperator->university = $request->input('university')[$i];
                $cooperator->department = $request->input('department')[$i];

                $cooperator->save();
            }
            //Handle new cooperators, which are currently being added
            else
            {
                $cooperator = new Cooperator();
                $new_submission_cooperator = new Submission_Cooperator();

                $cooperator->first_name = $request->input('first_name')[$i];
                $cooperator->last_name = $request->input('last_name')[$i];
                $cooperator->birth_date = $request->input('birth_date')[$i];
                $cooperator->address = $request->input('address')[$i];
                $cooperator->city = $request->input('city')[$i];
                $cooperator->country = $request->input('country')[$i];
                $cooperator->zipcode = $request->input('zipcode')[$i];
                $cooperator->email = $request->input('email')[$i];
                $cooperator->telephone = $request->input('telephone')[$i];
                $cooperator->university = $request->input('university')[$i];
                $cooperator->department = $request->input('department')[$i];
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

        //Conference handle
        $submission_conference = Submission_Conference::where('submission_id',$id)->first();
        $submission_conference->conference_id = $request->input('conference');
        $submission_conference->save();

        return redirect('chairsubmissions')->withErrors(array('msg' => $submission->title . ' updated successfully!'));
    }

    public function submissionsdelete($id)
    {
        $submission = Submission::where('id',$id)->first();
        $submission->deleted = '1';
        $submission->save();

        return redirect('chairsubmissions')->withErrors(array('msg' => $submission->title . ' deleted successfully!'));
    }

    public function chairsubmissionsassign()
    {
        $reviewer_submission = Reviewer_Submission::pluck('submission_id')->toArray();

        //Limit to 10 the submission
        $submission = Submission::where('submissions.deleted','0')
                                ->whereNotIn('submissions.id',$reviewer_submission)
                                ->join('categories','submissions.category_id','categories.id')
                                //->chunk(1)
                                ->select('submissions.*','categories.category_name')
                                ->get();

        $reviewer = User::where('deleted','0')->where('user_type','reviewer')->where('email_verified_at','!=',null)->get();

        return view('chair/submissions_assign')->with('submission',$submission)->with('reviewer',$reviewer);
    }

    public function chairsubmissionsassignpost(Request $request,$id)
    {
        $this->validate($request, [
            'reviewer_1' => 'required',
            'reviewer_2' => 'required',
        ]);

        //Egyforma reviewer lekezelese(nem kuldi vissza az uzenetet)
        if($request->input('reviewer_1') == $request->input('reviewer_2'))
        {
            return redirect()->back();
        }

        $reviewer_submission = new Reviewer_Submission();
        $reviewer_submission->user_id = $request->input('reviewer_1');
        $reviewer_submission->submission_id = $id;
        $reviewer_submission->save();

        $reviewer_submission_2 = new Reviewer_Submission();
        $reviewer_submission_2->user_id = $request->input('reviewer_2');
        $reviewer_submission_2->submission_id = $id;
        $reviewer_submission_2->save();

        return redirect()->back()->withErrors(array('msg' => 'Submission successfully assigned to reviewers!'));
    }

    public function users()
    {
        $users = User::where('user_type','submitter')->where('deleted','0')->orWhere('user_type','reviewer')->where('deleted','0')->paginate(10000);

        return view('chair/users')->with('users',$users);
    }

    public function usersdelete($id)
    {
        $users = User::where('id',$id)->first();
        $users->deleted = '1';
        $users->save();

        return redirect('users')->withErrors(array('msg' => $users->first_name . ' ' . $users->last_name . ' deleted successfully!'));
    }

    public function usersedit($id)
    {
        $users = User::find($id);

        return view('chair/users_edit')->with('users',$users);
    }

    public function userseditpost(Request $request,$id)
    {
        //Lehet ha kell ide meg validalas IDK
        $this->validate($request, [
            'first_name' => 'required|max:50|string',
            'last_name' => 'required|max:50|string',
            'birth_date' => 'nullable|date',
            'email' => 'required|email|max:50',
            'address' => 'nullable|max:100',
            'city' => 'nullable|max:100',
            'country' => 'nullable|max:100',
            'zipcode' => 'nullable|digits:6',
            'university' => 'required|max:50',
            'department' => 'required|max:50',
            'telephone' => 'required|max:50',
        ]);

        $users = User::find($id);

        $users->first_name = $request->input('first_name');
        $users->last_name = $request->input('last_name');
        $users->birth_date = $request->input('birth_date');
        $users->email = $request->input('email');
        $users->address = $request->input('address');
        $users->city = $request->input('city');
        $users->country = $request->input('country');
        $users->zipcode = $request->input('zipcode');
        $users->telephone = $request->input('telephone');
        $users->university = $request->input('university');
        $users->department = $request->input('department');
        $users->save();

        return redirect('users')->withErrors(array('msg' => $users->first_name . ' ' . $users->last_name . ' edited successfully!'));

    }

    public function usersactivate($id)
    {
        $users = User::find($id);
        $users->email_verified_at = Carbon::now();
        $users->save();

        return redirect()->back()->withErrors(array('msg' => $users->email . ' activated successfully!'));
    }

    public function categories()
    {
        $categories = Category::where('deleted','0')->get();

        return view('chair/categories')->with('categories',$categories);
    }

    public function categoriescreatepost(Request $request)
    {
        if(Category::where('deleted','0')->where('category_name',$request->input('category_create'))->count() == 0)
        {
            $category = new Category();
            $category->category_name = $request->input('category_create');
            $category->save();

            return redirect()->back()->withErrors(array('msg' => $category->category_name . ' category created successfully!'));
        }
        else {
            return redirect()->back()->withErrors(array('errmsg' => $request->input('category_create') . ' category already exists!'));
        }
    }

    public function categorieseditpost(Request $request)
    {
        $category = Category::where('id',$request->input('cat_id'))->first();
        $category->category_name = $request->input('category_edit');
        $category->save();

        return redirect()->back()->withErrors(array('msg' => $category->category_name . ' updated successfully!'));
    }

    public function categoriesdelete($id)
    {
        $category = Category::where('id',$id)->first();
        $category->deleted = '1';
        $category->save();

        return redirect()->back()->withErrors(array('msg' => $category->category_name . ' category deleted successfully!'));
    }

    public function documents()
    {
        return view('chair/documents');
    }

    public function mailing()
    {
        $categories = Category::where('deleted','0')->get();

        return view('chair/mailing')->with('categories', $categories);
    }

    public function mailingpost(Request $request)
    {
        //request szetdarabolasa egy tombbe
        $reviewers = explode(" ",$request->input('reviewer_mail'));
        $category = Category::where('id',$request->input('category'))->first();

        set_time_limit(0);

        //vegigmenni a tomb elemein, ellenorizni hogy email formatuma van-e, majd ellenorizni hogy adatbazisba mar szarepel-e
        foreach ($reviewers as $reviewer) {
            if (filter_var($reviewer, FILTER_VALIDATE_EMAIL)) {

                if(User::where('email',$reviewer)->count() == 0)
                {
                    $user = new User();
                    $user->email = $reviewer;
                    $user->email_hash = str_replace('/','',Hash::make($reviewer));
                    $user->user_type = 'reviewer';
                    $user->code = rand(1000,9999);
                    $user->department = $category->category_name;
                    $user->save();

                    //email kuldes resz
                    Mail::send('emails/reviewer_invitation',['user'=>$user],function($message) use ($user){
                        $message->from(Auth::user()->email);
                        $message->to($user->email)->subject('Reviewer invitation');
                    });

                    //Mailtrap nem tud sok emailt egyszerre fogadni, ugyhogy lehet ez az opcio majd nem is fog kelleni itt
                    sleep(3);
                    //Egy masodpercen belul max 2 emailt fogad be a mailtrap
                }
            }
        }

        return redirect()->back()->withErrors(array('msg' => 'Reviewer mails sent successfully!'));
    }

    public function directmailpost(Request $request)
    {
        if (filter_var($request->input('direct_email'), FILTER_VALIDATE_EMAIL)) {

            if(User::where('email',$request->input('direct_email'))->count() == 1)
            {
                $data = array('email'=>$request->input('direct_mail_message'));

                //email kuldes resz
                Mail::send('emails/direct_mail',$data,function($message) use ($request){
                    $message->from(Auth::user()->email);
                    $message->to($request->input('direct_email'))->subject($request->input('direct_email_subject'));
                });

            }
            else {
                return redirect()->back()->withErrors(array('errmsg' => 'There is no such email as: ' . $request->input('direct_email') . ' in our database! Try one that exist in it!'));
            }
        }
        else {
            return redirect()->back()->withErrors(array('errmsg' => 'Not a valid email! Enter a correct one!'));
        }

        return redirect()->back()->withErrors(array('msg' => 'Direct mail have been sent successfully!'));
    }

    public function multiplemailpost(Request $request)
    {
        if($request->input('category') == '0')
        {
            $category = Category::where('deleted','0')->pluck('category_name')->toArray();

            if($request->input('user_type') == "0")
            {
                $users = User::where('deleted','0')->whereIn('department',$category)->pluck('email')->toArray();
            }
            if($request->input('user_type') == "1")
            {
                $users = User::where('deleted','0')->where('user_type','submitter')->whereIn('department',$category)->pluck('email')->toArray();
            }
            if($request->input('user_type') == "2")
            {
                $users = User::where('deleted','0')->where('user_type','reviewer')->whereIn('department',$category)->pluck('email')->toArray();
            }
            if($request->input('user_type') == "3")
            {
                $users = User::where('deleted','0')->where('user_type','chair')->whereIn('department',$category)->pluck('email')->toArray();
            }
        }
        else {
            if($request->input('user_type') == "0")
            {
                $users = User::where('deleted','0')->where('department',$request->input('category'))->pluck('email')->toArray();
            }
            if($request->input('user_type') == "1")
            {
                $users = User::where('deleted','0')->where('user_type','submitter')->where('department',$request->input('category'))->pluck('email')->toArray();
            }
            if($request->input('user_type') == "2")
            {
                $users = User::where('deleted','0')->where('user_type','reviewer')->where('department',$request->input('category'))->pluck('email')->toArray();
            }
            if($request->input('user_type') == "3")
            {
                $users = User::where('deleted','0')->where('user_type','chair')->where('department',$request->input('category'))->pluck('email')->toArray();
            }
        }

        set_time_limit(0);

        foreach ($users as $user) {

            $data = array('email'=>$request->input('multiple_email_message'));

            Mail::send('emails/direct_mail',$data,function($message) use ($request,$user){
                $message->from(Auth::user()->email);
                $message->to($user)->subject($request->input('multiple_email_subject'));
            });

            //Mailtrap nem tud sok emailt egyszerre fogadni, ugyhogy lehet ez az opcio majd nem is fog kelleni itt
            sleep(4);
            //Egy masodpercen belul max 2 emailt fogad be a mailtrap
        }

        return redirect()->back()->withErrors(array('msg' => 'Multiple mail have been sent successfully!'));
    }

    public function settings()
    {
        return view('chair/settings');
    }

    public function editProfile() {
        return view('chair/editProfileChair');
    }

    public function editProfileUpdate(Request $request, $id) {
        $this->validate($request, [
            'first_name' => 'required|max:50|string',
            'last_name' => 'required|max:50|string',
            'birth_date' => 'nullable|max:255|date',
            //'gender' => 'nullable|max:6',
            'address' => 'nullable|max:100',
            'city' => 'nullable|max:100',
            'country' => 'nullable|max:100',
            'zipcode' => 'nullable|digits:6',
            'email' => 'email|required|max:50',
            'telephone' => 'required|digits_between:10,15',
            'university' => 'required|max:100',
            'department' => 'required|max:100',
            //'facebook' => 'nullable|max:100|url',
            //'google' => 'nullable|max:100|url',
            //'twitter' => 'nullable|max:100|url',
            //'linkedin' => 'nullable|max:100|url',
        ]);

        $user = User::find($id);

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->birth_date = $request->input('birth_date');
        //$user->gender = $request->input('gender');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->zipcode = $request->input('zipcode');
        $user->email = $request->input('email');
        $user->telephone = $request->input('telephone');
        $user->university = $request->input('university');
        $user->department = $request->input('department');
        //$user->facebook = $request->input('facebook');
        //$user->google = $request->input('google');
        //$user->twitter = $request->input('twitter');
        //$user->linkedin = $request->input('linkedin');

        $user->save();
        return redirect('editProfileChair')
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

            return redirect('editProfileChair')
                        ->withErrors(array('msg' => 'Password update succeded!'));
        }
    }

    public function downloadPDF($pdf)
    {
        return response()->download(storage_path("app/pdf/thesis/$pdf"));
    }
}
