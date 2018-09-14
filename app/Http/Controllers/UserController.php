<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Redirect;
use Session;
use App\User;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        if(User::where('email', '=', $request->email)->exists()){
            return response('Email Already Being Used', 500); 
        }

        if($request->ajax()){
            $users = new User;
            $users->name = $request->name;
            $users->email = $request->email;
            $users->password =  bcrypt($request->password);
            $users->save();
            return response($users);
        }
    }
}
