<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use JWTAuth;
use JWTAuthException;

class EventController extends Controller
{
    
    public function create(Request $request){

        $teacher = JWTAuth::parseToken()->authenticate();

        if($teacher){
            $event = Event::create([
                'event_name' => $request['event_name'],
                'organiser' => $request['organiser'],
                'start_date' => $request['start_date'],
                'end_date' => $request['end_date'],
                'teacher_id' => $teacher['id']
            ]);
            
            return response()->json(['data'=>$event, 'status'=>'ok']);

        }else{

            return response(401);

        }
        
    }
}
