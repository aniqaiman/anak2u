<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'class_id';
    public $timeStamps = 'true';
    protected $fillable = [
        'class_name',
        'student_id',
        'teacher_id'
    ];
}
