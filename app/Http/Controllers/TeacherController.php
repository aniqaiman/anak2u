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
use App\Institute;
use App\ClassRoom;

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

    public function getTeacher($institute_id, Request $request)
    {
        $institutes = Institute::where('institute_id', $institute_id)->first();
        $classrooms = ClassRoom::where('institute_id', $institute_id)->get();
        $teachers = Teacher::where('institute_id', $institute_id)->get();
        return view('teacher.teacher', compact('teachers','institutes','classrooms'));
    }

    public function editTeacher($institute_id, $teacher_id, Request $request)
    {
        $institutes = Institute::where('institute_id', $institute_id)->first();
        $teacher = Teacher::where('teacher_id', $request->teacher_id)->first();
        return view('teacher.editTeacher', compact('institutes','teacher'));
    }

    public function updateTeacher(Request $request)
    {
        if($request->ajax()){
            $teacher = Teacher::where('teacher_id', $request->teacher_id)->first();
            $teacher->teacher_name = $request->teacher_name;
            $teacher->address = $request->address;
            $teacher->phone_number = $request->phone_number;
            $teacher->email = $request->email;
            $teacher->save();
            return response($teacher);
            }
    }
}
