<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\StudentReport;
use App\ClassRoom;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'student_id';
    public $timeStamps = 'true';
    protected $fillable = [
        'student_name',
        'age',
        'hobby',
        'ambition',
        'nickname',
        'birthday',
        'parents_id',
        'class_id',
        'mykid_number',
        'allergies',
        'height',
        'weight',
        'bmi',
        'blood_type'
    ];

    public function studentreports(){
        return $this->hasMany('App\StudentReport', 'student_id');
    }

    public function class(){
        return $this->belongsTo('App\ClassRoom', 'class_id');
    }

    public function parents(){
        return $this->belongsTo('App\Parents', 'parents_id');
    }
}
