<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Redirect;
use Session;
use App\Classroom;
use App\Student;
use App\StudentReport;

class StudentController extends Controller
{
    public function studentDashboard(Request $request, $student_id)
    { 
        $student = Student::where('student_id', $student_id)->first();
        $studentreports = StudentReport::where('student_id', $student_id)->get();
        return view('student.studentdashboard', compact('student', 'studentreports'));
    }
    
    public function getStudent($class_id, Request $request)
    {
        $classrooms = Classroom::where('class_id', $class_id)->first();
        $students = Student::where('class_id', $class_id)->get();
        return view('student.student', compact('students','classrooms'));
    }

    public function createStudent(Request $request)
    {
        if($request->ajax()){
            return response(Student::create($request->all()));
        }
    }


}
