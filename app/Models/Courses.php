<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Courses extends Model
{
    //
    protected $fillable =[
    'course',
    'units',
    'schedule'];
    // protected $hidden =[
    //     'password'
    // ];
//    protected $table = 'humans';
    public function student(){
        return $this->belongsToMany('App\Models\Human');
    }
}

