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

class DashboardController extends Controller
{
    public function getDashboard($institute_id, Request $request)
    {
        $institutes = Institute::where('institute_id', $institute_id)->first();
        return view('institute.instituteDashboard', compact('institutes'));
    }
}
