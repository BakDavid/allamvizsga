<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class CustomLoginController extends BaseController
{

    public function login(Request $request)
    {
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'deleted' => '0'
        ]))
        {
            $user = User::where('email',$request->email)->first();

            if($user->user_type == 'submitter')
            {
                return redirect()->route('home');
            }
            if($user->user_type == 'reviewer')
            {
                return redirect()->route('review');
            }
            if($user->user_type == 'chair')
            {
                return redirect()->route('overview');
            }
            if($user->user_type == 'admin')
            {
                return redirect()->route('admin');
            }

        }
        else {

            return redirect()->back()->withErrors(array('msg' => 'There is no account with ' . $request->email . ' email or the password is wrong!'));
        }

    }
}
