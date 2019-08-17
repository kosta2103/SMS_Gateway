<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\ListensTo;
use App\Exam;

class Student extends Model
{
    protected $fillable = [
        'id','index_number', 'year_enrolled', 'mobile_number', 'verification_code'
    ];

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function listensTo()
    {
        return $this->hasMany('App\ListensTo');
    }

    public function exam(){
        return $this->hasMany('App\Exam');
    }
}
