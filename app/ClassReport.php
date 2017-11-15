<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ClassRoom;

class ClassReport extends Model
{
    protected $table = 'class_reports';
    protected $primaryKey = 'report_id';
    public $timeStamps = 'true';
    protected $fillable = [
        'message',
        'class_id',
        'report_picture'
    ];

    public function class(){
        return $this->belongsTo('App\ClassRoom', 'class_id');
    }
}
