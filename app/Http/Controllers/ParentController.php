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
    		$parents->save();
    		return response($parents);    	
    	}
    }

    public function getParent()
    {
    	$parents = Parents::all();
    	return view('parent.parent', compact('parents'));
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}