<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Redirect;
use Session;
use App\ClassRoom;

class ClassroomController extends Controller
{
    public function createClassroom(Request $request)
    {
    	if($request->ajax()){
    		$classrooms = new ClassRoom;
    		$classrooms->class_name=$request->class_name;
            $classrooms->teacher_id = $request->teacher_id;
    		$classrooms->save();
    		return response($classrooms);
    	}
    }

    public function getClassroom()
    {
    	$classrooms = ClassRoom::all();
    	return view('classroom.classroom', compact('classrooms'));
    }

     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
