<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Redirect;
use Session;
use App\Event;
use App\Classroom;

class EventController extends Controller
{
    public function createEvent(Request $request)
    {
    	if($request->ajax()){
    		$events = new Event;
    		$events->event_name=$request->event_name;
    		$events->organiser=$request->organiser;
    		$events->start_date=$request->start_date;
    		$events->end_date=$request->end_date;
    		$events->teacher_id=$request->teacher_id;
            $events->class_id=$request->class_id;
    		$events->save();
    		return response($events);    	
        }
    }

    public function getEvent($class_id, Request $request)
    {
        $classrooms = Classroom::where('class_id', $class_id)->first();
    	$events = Event::where('class_id', $class_id)->get();
    	return view('event.event', compact('events','classrooms'));
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}