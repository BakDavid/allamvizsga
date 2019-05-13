<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Page;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

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

        return view('chair/pageedit')->with('pages', $pages);
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
        return view('chair/conferences');
    }

    public function submissions()
    {
        return view('chair/submissions');
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

        return view('chair/usersedit')->with('users',$users);
    }

    public function userseditpost(Request $request,$id)
    {
        $users = User::find($id);

        //Lehet ha kell ide meg validalas IDK

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

    public function documents()
    {
        return view('chair/documents');
    }

    public function mailing()
    {
        return view('chair/mailing');
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
}
