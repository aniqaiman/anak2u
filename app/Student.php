<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
