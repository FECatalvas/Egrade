<?php

namespace App;
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class announcement extends Model
{
    //
    protected $fillable =[
        'What',
        'Description',
        'Where',
        'Date',
        'Time'
        ];
    protected $table = 'announcement';
}
