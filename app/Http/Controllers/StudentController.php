<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Courses;
use Illuminate\Http\Request;
use App\Models\Human;
use App\Models\StudentInCourse;
use App\Models;
use App\Models\Grades;
use App\Models\announcement;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function showannouncements(){
    //     return view('student.Dashboard');
    // }
    public function showannouncements(Request $request){
        // dd($request);
        $announcements = announcement::select('id','What','Description','Where','Date','Time')
        ->orderBy('id', 'desc')
        ->get();
        return view('admin.Dashboard',compact('announcements'));
        
    }
    // public function showlistof

    public function showCourses(Request $request){
        $courses = Courses::all();
        // ->orderBy('courseId', 'desc')//courseId is refering to the database name.
        // ->get();       
        return view('admin.courses',['courses'=>$courses]);

    }
    public function showListOfStudent(Request $request){
        $course_id = $request->id;
         //$students = Human::all()->where('courseId','course_id');
        // $students = StudentInCourse::where('courseId', '=', $course_id)->with(['student' => function($query)
        // {
        //     $query->where('id', 3);
        // }])->get();
        $students = StudentInCourse::where('courseId', '=', $course_id)->with('student')->get();
         return view('admin.listOfStudentInTheSpecificCourse',compact('students'));
    }
   

    public function addCourses(){
        return view('admin.addCourse');//
    }
    public function create(Request $request){
        // dd($request->id);
        $course_id = $request->id;
        return view('admin.create',compact('course_id'));//
        // return view('student.create');//


    }
    public function addAnnouncementForm(){
        return view('admin.addAnnouncementForm');//
    }

    public function addAnnouncement(Request $request){
        $validatedData = $request->validate([
            'What' => 'required',
            'Description' => 'required',
            'Where' => 'required',
            'Date' => 'required',
            'Time' => 'required'
          
        ]);

        $announcement = new announcement([
            'What' => $request->get('What'),
            'Description' => $request->get('Description'),
            'Where' => $request->get('Where'),
            'Date' => $request->get('Date'),
            'Time' => $request->get('Time')
            ]);
            
            $announcement->save();
            return redirect()->route('admin/Dashboard');
    }

    //insert of Grades

    public function insertGrades(Request $request){
        $validatedData = $request->validate([
            'grade' => 'required'
        ]);
        $data = request()->except(['_token']);
        DB::table('grades')->insert($data);
        echo "Record inserted successfully.<br/>";
        return redirect()->to('admin/showGrades');
    }
  
    public function showGrades(Request $request){
        $grades = Grades::all();  
        return view('admin.viewGrades',['grades'=>$grades]); 
    }


    public function insert(Request $request){
        $validatedEmail = $request->validate([
            'email' => 'required|email',
        ]);
        $data = request()->except(['_token','course_id']);
        $id = DB::table('humans')->where('email',$request->email)->get(['id']);
        $student_in_courses = new studentInCourse(['courseId'=>$request->course_id,'studentId'=>$id[0]->id,'grade'=>0]);
    //    dd($student_in_courses);
        $student_in_courses->save();
        echo "Record inserted successfully.<br/>";
        return redirect()->to('admin/showlistOfStudent');
        // return 'test';
    }
    

    public function insertCourse(Request $request){

//     $id = $request->session()->get('user_id');
// $request['human_id'] = $id;
// $data = array('human_id' => $id, 'subjects' => $request->subjects);
// session(['subject_id'=>$subject->id]);

 
        $validatedData = $request->validate([
            'course' => 'required',
            'units' => 'required',
            'schedule' => 'required'
        ]);
        
        $data = request()->except(['_token']);
        // session(['CourseId'=>$data->id]);
        // dd(session());
        DB::table('courses')->insert($data);
       // echo $data;
        echo "Record inserted successfully.<br/>";
        // echo '<a href = "/insert">Click Here</a> to go back.';
        return redirect()->to('admin/showCourses');
        // return 'test';
    }
  

    public function edit($id)
    {
        $human = Human::find($id);
        return view('admin.edit',compact('human'));
    }


    
    public function update(Request $request, $id)
    {

        $request->validate([
            // 'course_Id' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email'],
            'age' => 'required|numeric',
            'gender' => 'required',
            'address' => 'required'

        ]);
        $courseId = $request->input('course_Id');
        $first_name = $request->input('first_name');
        $middle_name = $request->input('middle_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $address = $request->input('address');


        DB::update('update humans set first_name = ?,middle_name=?,last_name=?,email=?,age=?,gender=?,address=? where id = ?', [$first_name, $middle_name, $last_name, $email, $age, $gender, $address, $id]);
        echo "Record updated successfully.";
        return redirect()->to('admin/showlistOfStudent');
    }



   
    // public function destroy($id) {  
    //     $human = Humans::find($id);
    //     $human->delete();


    //     // DB::delete('delete from humans where id = ?',[$id]);
    //     echo "Record deleted successfully.";
    //     return redirect('/welcome')->with('success','Deleted successfully.');
    // }

    public function delete($id)
    {
        DB::table('humans')->where('id', $id)->delete();
        return redirect('admin/showlistOfStudent');

    }

    public function course()
    {
        return $this->hasOne('App\Models\Courses', 'courseId');
    }

    
}

