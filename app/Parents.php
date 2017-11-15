<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class Parents extends Model
{
    protected $table = 'parents';
    protected $primaryKey = 'parents_id';
    public $timeStamps = 'true';
    protected $fillable = [
        'father_name',
        'mother_name',
        'phone_number',
        'email',
        'address'
    ];


    public function students(){
        return $this->hasMany('App\Student', 'student_id');
    }
}
