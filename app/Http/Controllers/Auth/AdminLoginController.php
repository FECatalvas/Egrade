<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class AdminLoginController extends Controller
{
    /**
     * Show the application’s login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('admin.Admin');
    }
    protected function guard(){
        return Auth::guard('admin');
    }

    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/dashboard';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }


    public function adminloginpost(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
         if(Auth::guard('admin')->attempt($credentials)) {      
             return $this->admindashboard();
            return back()->with('success', 'You have login successfully.');  
           }
       return back()->withSuccess( 'Whoops! some error encountered. Please try again.');
   
}
    public function admindashboard(){
        if(Auth::guard('admin')->check()) {
            return view('admin.Dashboard');
        }
        return redirect()
            ->intended(route('adminlogin'))
            ->with('success','You do have Access on this page!!!!..Login First');

    }
    public function back(){
        return view('auth.Login');
    }
    public function adminlogout(Request $request ) {
        $request->session()->flush();
        Auth::logout();
       return Redirect('adminlogin');
        }
}
