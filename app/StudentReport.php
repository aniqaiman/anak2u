<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

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

    public function student()
    {
        return $this->belongsTo('App\Student', 'student_id');
    }
}
