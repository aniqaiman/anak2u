<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Redirect;
use Session;
use App\Parents;
use App\Classroom;

class ParentController extends Controller
{
    public function createParent(Request $request)
    {
    	if($request->ajax()){
    		$parents = new Parents;
    		$parents->father_name=$request->father_name;
    		$parents->mother_name=$request->mother_name;
    		$parents->address=$request->address;
    		$parents->phone_number=$request->phone_number;
    		$parents->email=$request->email;
            $parents->class_id=$request->class_id;
    		$parents->save();
    		return response($parents);    	
    	}
    }

    public function getParent($class_id, Request $request)
    {
        $classrooms = ClassRoom::where('class_id', $class_id)->first();
        $parents = Parents::where('class_id', $class_id)->get();
    	return view('parent.parent', compact('classrooms','parents'));
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}