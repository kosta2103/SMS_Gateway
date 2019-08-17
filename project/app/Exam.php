<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\Course;

class Exam extends Model
{
    protected $fillable = [
        'examination_period', 'grade', 'passed', 'student_id', 'course_id'
    ];

    public function students(){
        return $this->hasMany('App\Student');
    }

    public function course(){
        return $this->belongsTo('App\Course');
    }
}
