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
use App\Parents;

class StudentController extends Controller
{
    public function studentDashboard(Request $request, $student_id)
    { 
        $student = Student::where('student_id', $student_id)->first();
        $studentreports = StudentReport::where('student_id', $student_id)->get();
        return view('student.studentdashboard', compact('student', 'studentreports'));
    }

    public function createStudent(Request $request)
    {
        $path = $request->file('image_url')->store('public/images');
        if($request->ajax()){
            $students = new Student;
            $students->student_name = $request->student_name;
            $students->age = $request->age;
            $students->nickname = $request->nickname;
            $students->hobby = $request->hobby;
            $students->birthday = $request->birthday;
            $students->ambition = $request->ambition;
            $students->parents_id = $request->parents_id;
            $students->class_id = $request->class_id;
            $students->mykid_number = $request->mykid_number;
            $students->allergies = $request->allergies;
            $students->height = $request->height;
            $students->weight = $request->weight;
            $students->bmi = $request->bmi;
            $students->blood_type = $request->blood_type;
            $students->image_url = $path;
            $students->save();
            return response($students);
     
        }
    }

    public function getStudent($class_id, Request $request)
    {
        $classrooms = ClassRoom::where('class_id', $class_id)->first();
        $students = Student::where('class_id', $class_id)->get();
        $parents = Parents::where('class_id', $class_id)->get();
        return view('student.student', compact('students','classrooms','parents'));
    }

  }



