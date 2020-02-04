<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Human extends Model
{
    //
    protected $fillable =[
        // 'studentId',

    'first_name',
    'middle_name',
    'last_name',
    'email',
    'age',
    'gender',
    'address'];
    // protected $hidden =[
    //     'password'
    // ];
   protected $table = 'humans';
   public function course(){
    return $this->hasMany('App\Models\Course');
}



}

