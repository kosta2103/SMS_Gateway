<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListensTo extends Model
{
    protected $fillable = [
        'student_id', 'course_id'
    ];
}
