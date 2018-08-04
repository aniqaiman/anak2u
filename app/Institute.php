<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    protected $table = 'institutes';
    protected $primaryKey = 'institute_id';
    public $timeStamps = 'true';
    protected $fillable = [
        'institute_name',
        'institute_address',
        'location',
        'institute_image'
    ];

    public function classroom()
    {
    	return $this->hasMany('App\Classroom','institute_id');
    }

    public function teachers()
    {
        return $this->hasMany('App\Teacher','institute_id');
    }
}
