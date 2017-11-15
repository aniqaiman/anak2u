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
use App\ClassReport;
use App\Event;
use App\Student;

class ClassroomController extends Controller
{

    public function getDashboard(){
        $classrooms = ClassRoom::all();
        $students = Student::all();
        $events = Event::all();

        return view('dashboard', compact('classrooms, students, events'));
    }

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


// --------------------------------ClassRoom Report-------------------------------------------

	public function createClassroomReport(Request $request)
	{
		$path = $request->file('report_picture')->store('public/images');
		if ($request->ajax()){
			$classroomreports = new ClassReport;
			$classroomreports->class_id=$request->class_id;
			$classroomreports->message=$request->message;
			$classroomreports->report_picture=$path;
			$classroomreports->save();
			return response($classroomreports);
		}
	}

	public function getClassroomReport()
	{
		$classroomreports = ClassReport::all();
		return view('classroom.classReport', compact('classroomreports'));
	}    

     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
