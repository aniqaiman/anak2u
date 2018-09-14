<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Redirect;
use Session;
use App\Institute;
use Form;
use Auth;

class InstituteController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth:web');
	}

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

    public function editInstitute($institute_id, Request $request)
    {
        $institute = Institute::find($institute_id);
        return view('institute.editInstitute', compact('institute'));
    }

    public function updateInstitute(Request $request)
    {
        $institute = Institute::find($request->institute_id);

        if ($request->hasFile('institute_image')) {
            Storage::delete($institute->institute_image);
            $path = $request->file('institute_image')->store('public/images');
            $institute->institute_image = $path; 
        }

            $institute = Institute::where('institute_id', $request->institute_id)->first();
            $institute->institute_name = $request->institute_name;
            $institute->institute_address = $request->institute_address;
            $institute->location = $request->location;
            $institute->save();
            return response($institute);
    }       
    
}
