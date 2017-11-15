<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function getStudent(){
        $students = Student::all();
        return view('student.student', compact('students'));
    }

    public function createStudent(request $request)
    {
        if($request->ajax()){
            return response(Student::create($request->all()));
        }
    }

    public function studentDashboard(Request $request, $student_id){   
        $student = Student::where('student_id', $student_id)->first();
        return view('student.studentdashboard', compact('student'));
    }
}
