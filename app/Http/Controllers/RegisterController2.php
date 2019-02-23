<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController2 extends Controller
{
    public function store(Request $request)
    {
        //Ide lehet ha kell meg egy kis validalas resz
        
        $this->validate($request,[
            'first_name'=>'required|max:255|string',
            'last_name'=>'required|max:255|string',
            'birth_date'=>'required|max:255|date',
            'gender'=>'required|max:255',
            'address'=>'required|max:255',
            'city'=>'required|max:255',
            'country'=>'required|max:255',
            'zipcode'=>'required|digits:6',
            'email'=>'email|required|unique:users,email|max:255',
            'telephone'=>'required|digits_between:10,15',
            'university'=>'required|max:255',
            'department'=>'required|max:255',
            'facebook'=>'nullable|max:255|url',
            'google'=>'nullable|max:255|url',
            'twitter'=>'nullable|max:255|url',
            'linkedin'=>'nullable|max:255|url',
            'password'=>'required|max:255|confirmed',
            'photo'=>'nullable',
            'g-recaptcha-response'=>'required',
        ]);
        
        
        $user = new User();
        
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
        $user->password = bcrypt($request->input('password'));
        $user->remember_token = $request->input('_token');
        
        $user->user_type = 'submitter';
        
        if($request->hasFile('file'))
        {
            $file = $request->file('file');
            $name = time() . $file->getClientOriginalName();
            $destinationPath = public_path('/image/users_photo');
            $request->file('file')->move($destinationPath, $name);
            
            $user->photo = $name;
        }
        
        $user->save();
         
        //print_r($request->input('email'));
        //dd($request);
        
        return redirect('banan');
    }
}
