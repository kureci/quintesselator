<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function getRegister() {
        return view('auth.register');
    }

    public function postRegister(Request $request) {
        $input = $request->all();

        $validator = $this->validator($input);

        if ( $validator->fails() ) {
            $message = [
                'type' => 'danger',
                'message' => 'Registration failed. Please note the errors below'
            ];
            return redirect()->route('register')->with($message)->withErrors($validator->errors())->withInput();
        }

        $user = $this->create($input);

        if ($user->save()) {
            Auth::login($user);
            $user->login_counter = $user->login_counter+1;
            $user->save();

            $message = [
                'type' => 'success',
                'message' => 'You are now registered and automatically signed in.',
            ];
            return redirect('/')->with($message);
        } else {
            $message = [
                'type' => 'danger',
                'message' => 'Registration failed. Please try again.',
            ];
        }
        return redirect()->route('register')->with($message);
    }

    public function getLogin() {
        return view('auth.login');
    }

    public function postLogin(Request $request) {
        $input = $request->only('email', 'password');

        if (Auth::attempt($input)) {
            $user = Auth::user();
            $user->login_counter = $user->login_counter+1;
            $user->save();

            $message = [
                'type' => 'success',
                'message' => 'You are logged in'
            ];
        } else {
            $message = [
                'type' => 'danger',
                'message' => 'Login failed! Please ensure credentials are correct.'
            ];
        }
        return redirect()->route('login')->with($message);
    }

    public function getLogout() {
        Auth::logout();
        return redirect('/');
    }
}
