<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'teacher_id';
    public $timeStamps = 'true';
    protected $fillable = [
        'teacher_name',
        'phone_number',
        'email',
        'address',
        'institute_id'
    ];

    public function class(){
        return $this->hasMany('App\ClassRoom', 'teacher_id');
    }

    public function institute()
    {
        return $this->belongsTo('App\Institute','institute_id');
    }
}
