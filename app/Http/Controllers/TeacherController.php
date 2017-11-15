<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{

    public function createTeacher(request $request)
    {
        if($request->ajax()){
            return response(Teacher::create($request->all()));
        }
    }

    public function getTeacher(){
        $teachers = Teacher::all();
        return view('teacher.teacher', compact('teachers'));
    }
}
