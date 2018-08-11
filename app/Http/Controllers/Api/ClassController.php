<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\ClassRoom;
use App\ClassReport;
use Storage;
use Image;
use Carbon\Carbon;

class ClassController extends BaseController
{
    // public function getStudent(Request $request, $class_id){
    //     $students = Student::where('class_id', $class_id)->get();
    //     return response()->json(['data'=>$students, 'status'=>'ok']);
    // }

    public function getClass(){
        $classes = ClassRoom::get();
        return response()->json(['data'=>$classes, 'status'=>'ok']);
    }

    public function getClassReport(Request $request, $class_id){
        $reports = ClassReport::where('class_id', $class_id)->get();
        return response()->json(['data'=>$reports, 'status'=>'ok']);
    }

    public function postClassReport(Request $request, $class_id){

        $filename = 'image-'.$request['message'].'-'.$class_id.'-'.Carbon::now().'.jpg';
        $reportImagePath = 'report-image/' .$class_id.'/' . $filename;
        $image = Image::make($request['photo'])->orientate()->fit(500);
        $image = $image->stream();
        Storage::disk('s3')->put($reportImagePath, $image->__toString());

        $classreport = ClassReport::create([
            'message' => $request['message'],
            'class_id' => $class_id,
            'report_picture' =>env('APP_PHOTO_URL').$reportImagePath,
        ]);
        return response()->json(['data'=>$classreport, 'status'=>'ok']);
    }

}
