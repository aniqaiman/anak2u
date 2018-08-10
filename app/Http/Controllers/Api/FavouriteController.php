<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Favourite;
use JWTAuth;
use JWTAuthException;

class FavouriteController extends Controller
{
    public function create(Request $request){

        $user = JWTAuth::parseToken()->authenticate();

        $favourite = Favourite::create([
            'user_id' => $user['id'],
            'report_id' => $request['report_id']
        ]);

        return response()->json(['data' => $favourite, 'status' => 'ok']);
    }
}
