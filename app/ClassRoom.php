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
        'teacher_id'
    ];

    public function student(){
        return $this->hasMany('App\Student', 'class_id');
    }

    public function classreports(){
        return $this->hasMany('App\ClassReport', 'class_id');
    }
}
