<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentReport extends Model
{
    protected $table = 'student_reports';
    protected $primaryKey = 'student_reports_id';
    public $timeStamps = 'true';
    protected $fillable = [
        'student_id',
        'message',
        'type'
    ];
}
