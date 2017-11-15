<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// --------------------classroom------------------------------------------------

 	Route::post('/classroom',['as'=>'createClassroom','uses'=>'ClassroomController@createClassroom']);	
	Route::get('/classroom',['as'=>'classroom','uses'=>'ClassroomController@getClassroom']);


// --------------------API------------------------------------------------

Route::get('/api/class/{class_id}/students', 'Api\StudentController@getStudent');

Route::get('/api/teachers', 'Api\TeacherController@getTeacher');

Route::get('/api/student/{student_id}/reports', 'Api\StudentController@getStudentReport');

Route::get('/api/class/{class_id}/reports', 'Api\ClassController@getClassReport');
