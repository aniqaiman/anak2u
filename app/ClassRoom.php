<?php

namespace App;
use App\Student;
use App\ClassReport;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'class_id';
    public $timeStamps = 'true';
    protected $fillable = [
        'class_name',
        'teacher_id',
        'institute_id',
    ];

    public function students(){
        return $this->hasMany('App\Student', 'class_id');
    }

    public function classreports(){
        return $this->hasMany('App\ClassReport', 'class_id');
    }

    public function teachers(){
        return $this->belongsTo('App\Teacher', 'teacher_id');
    }

    public function institute()
    {
        return $this->belongsTo('App\Institute','institute_id');
    }
}
