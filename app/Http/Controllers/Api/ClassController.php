<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\ClassRoom;
use App\ClassReport;

class ClassController extends BaseController
{
    // public function getStudent(Request $request, $class_id){
    //     $students = Student::where('class_id', $class_id)->get();
    //     return response()->json(['data'=>$students, 'status'=>'ok']);
    // }

    public function getClass(){
        $classes = ClassRoom::get();
        return response()->json(['data'=>$classes, 'status'=>'ok']);
    }

    public function getClassReport(Request $request, $class_id){
        $reports = ClassReport::where('class_id', $class_id)->get();
        return response()->json(['data'=>$reports, 'status'=>'ok']);
    }

    public function postClassReport(Request $request, $class_id){
        $classreport = ClassReport::create([
            'message' => $request->get('message'),
            'class_id' => $request->get('class_id'),
            'report_picture' => $request->get('report_picture')
        ]);
        return response()->json(['data'=>$classreport, 'status'=>'ok']);
    }

}
