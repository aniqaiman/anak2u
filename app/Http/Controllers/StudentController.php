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

<<<<<<< HEAD
    public function studentDashboard(Request $request, $student_id){   
        $student = Student::where('student_id', $student_id)->first();
        return view('student.studentdashboard', compact('student'));
    }
=======
// ------------------------ student Report ------------------------------

    public function createStudentReport(Request $request)
    {
        if($request->ajax()){
            $studentreports = new StudentReport;
            $studentreports->student_id=$request->student_id;
            $studentreports->message=$request->message;
            $studentreports->type=$request->type;
            $studentreports->save();
            return response($studentreports);
        }
    }

    public function getStudentReport()
    {
        $studentreports = StudentReport::all();
        return view('student.studentReport', compact('studentreports'));
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
>>>>>>> c9468897121f5d322a837780864370586543e6b3
}
