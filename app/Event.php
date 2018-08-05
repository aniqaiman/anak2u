<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'event_id';
    public $timeStamps = 'true';
    protected $fillable = [
        'event_name',
        'organiser',
        'start_date',
        'end_date',
        'teacher_id',
        'class_id'
    ];
}
