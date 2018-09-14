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
use App\ClassRoom;
use App\Institute;
use App\Teacher;

class ParentController extends Controller
{
    public function createParent(Request $request)
    {
    	if($request->ajax()){
    		$parents = new Parents;
    		$parents->father_name = $request->father_name;
    		$parents->mother_name = $request->mother_name;
    		$parents->address = $request->address;
    		$parents->phone_number = $request->phone_number;
    		$parents->email = $request->email;
            $parents->institute_id = $request->institute_id;
    		$parents->save();
    		return response($parents);    	
    	}
    }

    public function getParent($institute_id, Request $request)
    {
        $institutes = Institute::where('institute_id', $institute_id)->first();
        $classrooms = ClassRoom::where('institute_id', $institute_id)->get();
        $teachers = Teacher::where('institute_id', $institute_id)->get();
        $parents = Parents::where('institute_id', $institute_id)->get();
    	return view('parent.parent', compact('institutes','classrooms','teachers','parents'));
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}