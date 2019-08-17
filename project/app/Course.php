<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Professor;
use App\Exam;

class Course extends Model
{
    protected $fillable = [
        'id','name', 'professor_id'
    ];

    public function professor()
    {
        return $this->hasOne('App\Professor');
    }

    public function exam(){
        return $this->hasMany('App\Exam');
    }

}
