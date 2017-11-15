<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Student;
use App\StudentReport;

class StudentController extends BaseController
{
    // public function getStudent(Request $request, $class_id){
    //     $students = Student::where('class_id', $class_id)->get();
    //     return response()->json(['data'=>$students, 'status'=>'ok']);
    // }

    public function getStudent(Request $request, $class_id){
        $students = Student::where('class_id', $class_id)->get();
        return response()->json(['data'=>$students, 'status'=>'ok']);
    }

    public function getStudentReport(Request $request, $student_id){
        $reports = StudentReport::where('student_id', $student_id)->get();
        return response()->json(['data'=>$reports, 'status'=>'ok']);
    }

    public function postStudentReport(Request $request, $student_id){
        $report = StudentReport::create([
            'student_id' => $request->get('student_id'),
            'message' => $request->get('message'),
            'type' => $request->get('type')
        ]);

        return response()->json(['data'=>$report, 'status'=>'ok']);
    }
}
