<?php

namespace App\Http\Controllers;

use App\Models\Human;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //exit
    // public function welcome(){
    //     return view('welcome');
    // }
    // public function register( ){
    //     return view('registration');
    // }
    // public function login(){
    //     return view('login');
    // }
    // public function list(Request $request){
    //     $humans = Human::all();
    //     return view('student.welcome',compact('humans'));
    // }
    public function welcome(Request $request){
        // dd(Human::get());
        $humans = Human::all();
        // $humans =Human::where('id',$request->id)->get();
        // return view('student.welcome',compact('humans'));
        return view('student.welcome',['humans'=>$humans]);
    }

    public function showStudent(Request $request){
        // dd(Human::get());
        $courses = Human::all();
        // $humans =Human::where('id',$request->id)->get();
        // return view('student.welcome',compact('humans'));
        return view('student.showStudent',['courses'=>$courses]);
    }
}

?>