<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Redirect;
use Session;
use App\Teacher;
use App\Classroom;

class TeacherController extends Controller
{

    public function createTeacher(Request $request)
    {
        if($request->ajax()){
            $teachers = new Teacher;
            $teachers->teacher_id=$request->teacher_id;
            $teachers->teacher_name = $request->teacher_name;
            $teachers->address = $request->address;
            $teachers->phone_number = $request->phone_number;
            $teachers->email = $request->email;
            $teachers->class_id = $request->class_id;
            $teachers->save();
            return response($teachers);
        }
    }

    public function getTeacher($class_id, Request $request)
    {
        $classrooms = Classroom::where('class_id', $class_id)->first();
        $teachers = Teacher::where('class_id', $classrooms->class_id)->get();
        return view('teacher.teacher', compact('teachers','classrooms'));
    }
}
