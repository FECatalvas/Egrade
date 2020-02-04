<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Model\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()
{
    return view('auth.login');
}
public function userPostLogin(Request $request) {
    $request->validate([
        'email'=>'required|unique:users',
        'password'=>'required|min:6'
    ]);
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        if(Auth::attempt($credentials)) {      
            return $this->dashboard();;
            return back()->withSuccess('You have login successfully.');  
           }
        
        return back()->with('error', 'Whoops! some error encountered. Please try again.');
    }
    public function dashboard() {
        if(Auth::check()) {
            return redirect()->route('display');
        }
        return redirect::to('userlogin')->withSuccess('Oopps! You do not have access to this page!!!LoginFirst');
    }
    public function logout(Request $request ) {
        $request->session()->flush();
        Auth::logout();
        return Redirect('userlogin');
        }
    
}