<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name'=>'required|max:30|string',
            'last_name'=>'required|max:30|string',
            'birth_date'=>'nullable|max:255|date',
            //'gender'=>'nullable|max:6',
            'address'=>'nullable|max:30',
            'city'=>'nullable|max:30',
            'country'=>'nullable|max:30',
            'zipcode'=>'nullable|digits:6',
            'email'=>'email|required|unique:users,email|max:30',
            'telephone'=>'required|digits_between:10,15',
            'university'=>'required|max:30',
            'department'=>'required|max:30',
            //'facebook'=>'nullable|max:50|url',
            //'google'=>'nullable|max:50|url',
            //'twitter'=>'nullable|max:50|url',
            //'linkedin'=>'nullable|max:50|url',
            'password'=>'required|max:255|confirmed',
            'file'=>'nullable',
            'g-recaptcha-response'=>'required',
        ],[
            'g-recaptcha-response.required' => 'The captcha field is required!',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //dd($data);

        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'birth_date' => $data['birth_date'],
            //'gender' => $data['gender'],
            'address' => $data['address'],
            'city' => $data['city'],
            'country' => $data['country'],
            'zipcode' => $data['zipcode'],
            'email' => $data['email'],
            'telephone' => $data['telephone'],
            'university' => $data['university'],
            'department' => $data['department'],
            //'facebook' => $data['facebook'],
            //'twitter' => $data['twitter'],
            //'google' => $data['google'],
            //'linkedin' => $data['linkedin'],
            'password' => Hash::make($data['password']),
            'user_type' => 'submitter',
        ]);
    }
}
