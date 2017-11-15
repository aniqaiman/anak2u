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

    Route::get('/dashboard', ['as'=>'dashboard', 'uses'=>'ClassroomController@getDashboard']);

// --------------------student------------------------------------------------

    Route::get('/students', ['as'=>'students', 'uses'=>'StudentController@getStudent']);
    Route::post('/students',['as'=>'createStudent','uses'=>'StudentController@createStudent']);

// --------------------teacher------------------------------------------------

    Route::get('/teachers', ['as'=>'teachers', 'uses'=>'TeacherController@getTeacher']);
    Route::post('/teachers',['as'=>'createTeacher','uses'=>'TeacherController@createTeacher']);

// --------------------classroom------------------------------------------------

 	Route::post('/classroom',['as'=>'createClassroom','uses'=>'ClassroomController@createClassroom']);	
	Route::get('/classroom',['as'=>'classroom','uses'=>'ClassroomController@getClassroom']);


// --------------------API------------------------------------------------

Route::get('/api/class/{class_id}/students', 'Api\StudentController@getStudent');

Route::get('/api/teachers', 'Api\TeacherController@getTeacher');

Route::get('/api/student/{student_id}/reports', 'Api\StudentController@getStudentReport');

Route::get('/api/class/{class_id}/reports', 'Api\ClassController@getClassReport');
