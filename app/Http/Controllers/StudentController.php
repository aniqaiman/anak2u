<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Redirect;
use Session;
use App\Student;
use App\StudentReport;

class StudentController extends Controller
{
    public function getStudent(){
        $students = Student::all();
        return view('student.student', compact('students'));
    }

    public function createStudent(Request $request)
    {
        if($request->ajax()){
            return response(Student::create($request->all()));
        }
    }

    public function studentDashboard(Request $request, $student_id){   
        $student = Student::where('student_id', $student_id)->first();
        $studentreports = StudentReport::where('student_id', $student_id)->get();
        return view('student.studentdashboard', compact('student', 'studentreports'));
    }

}
