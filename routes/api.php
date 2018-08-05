<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// --------------------API------------------------------------------------

// TEACHER
Route::get('/teachers', 'Api\TeacherController@getTeacher');
// STUDENT
Route::get('/class/{class_id}/students', 'Api\StudentController@getStudent');
Route::get('/student/{student_id}/reports', 'Api\StudentController@getStudentReport');
Route::post('/student/{student_id}/report', 'Api\StudentController@postStudentReport');
// CLASS
Route::get('/class/{class_id}/reports', 'Api\ClassController@getClassReport');
Route::post('/class/{class_id}/report', 'Api\ClassController@postClassReport');

Route::post('/login', 'Api\LoginController@login');

Route::post('/event', 'Api\EventController@create');