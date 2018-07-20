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

    public function createTeacher(request $request)
    {
        if($request->ajax()){
            return response(Teacher::create($request->all()));
        }
    }

    public function getTeacher($class_id, Request $request)
    {
        $classrooms = Classroom::where('class_id', $class_id)->first();
        $teachers = Teacher::where('class_id', $class_id)->get();
        return view('teacher.teacher', compact('teachers','classrooms'));
    }
}
