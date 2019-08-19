<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Course;

class Professor extends Model
{
    protected $fillable = [
        'id'
    ];

    public $timestamps = true;

    public function user()
    {
        return $this->is_a('App\User');
    }

    public function course()
    {
        return $this->hasMany('App\Course');
    }
}
