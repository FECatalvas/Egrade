<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\User;
use Auth;

class UserLoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:user')->except('logout');
    }

    public function showLoginForm()
    {
      return view('auth.login');
    }

    public function login(Request $request)
    {
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }
        if (! User::where('email', $request->email)->where('password', bcrypt($request->password))->first() ) {
            return redirect()->back()
                ->withInput($request->only('email'))
                ->withErrors(['status' =>  'Incorrect username or password.']);
        }
    }

    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect()->route('login');
    }
}