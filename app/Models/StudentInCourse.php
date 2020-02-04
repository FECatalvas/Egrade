<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentInCourse extends Model
{
    //
    
    protected $fillable =[
        'courseId',
         'studentId',
         'grade'
     ];
    protected $table = 'student_in_courses';


    public function student()
    {
        return $this->hasMany('App\Models\Human','id','studentId' );
    }
    public function course()
    {
        return $this->hasMany('App\Models\Courses','id','courseId' );
    }
}
