<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class CustomRegisterController extends BaseController
{

    public function register($email_hash)
    {
        $user = User::where('email_hash',$email_hash)->first();

        return view('auth/customregister')->with('user',$user);
    }

    public function registerpost(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|max:50|string',
            'last_name' => 'required|max:50|string',
            'birth_date' => 'nullable|max:255|date',
            'address' => 'nullable|max:100',
            'city' => 'nullable|max:100',
            'country' => 'nullable|max:100',
            'zipcode' => 'nullable|digits:6',
            'telephone' => 'required|digits_between:10,15',
            'university' => 'required|max:100',
            'password'=>'required|max:255|confirmed',
            'code' => 'required|digits:4',
        ]);

        $user = User::where('email',$request->input('email'))->first();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->birth_date = $request->input('birth_date');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->zipcode = $request->input('zipcode');
        $user->telephone = $request->input('telephone');
        $user->university = $request->input('university');
        $user->password =  Hash::make($request->input('password'));
        $user->email_verified_at = Carbon::now();
        $user->save();

        return view('auth/login')->withErrors(array('msgp' => 'The account with the following email: ' . $user->email . ' have been set up successfully and activated! Log in to use your account.'));
    }
}
