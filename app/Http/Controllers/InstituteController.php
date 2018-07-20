<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Redirect;
use Session;
use App\Institute;
use Form;

class InstituteController extends Controller
{
    public function createInstitute(Request $request)
    {
    	$path = $request->file('institute_image')->store('public/images');
    	if($request->ajax()){
    		$institute = new Institute;
    		$institute->institute_name = $request->institute_name;
    		$institute->institute_address = $request->institute_address;
    		$institute->location = $request->location;
    		$institute->institute_image = $path;
    		$institute->save();
    		return response($institute);
    	}
    }

    public function getInstitute()
    {
    	$institutes = Institute::all();
    	return view('institute.institute', compact('institutes'));
    }
}
