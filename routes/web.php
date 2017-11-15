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
    Route::get('/student/{student_id}/studentdashboard', ['as' => 'studentdashboard','uses' =>'StudentController@studentDashboard']);
    Route::get('/dashboard', ['as'=>'dashboard', 'uses'=>'ClassroomController@getDashboard']);

// --------------------student------------------------------------------------

    Route::post('/students',['as'=>'createStudent','uses'=>'StudentController@createStudent']);
    Route::get('/students', ['as'=>'students', 'uses'=>'StudentController@getStudent']);

// --------------------Student Report------------------------------------------------

	Route::post('/studentreport', ['as'=>'createStudentReport', 'uses'=>'StudentController@createStudentReport']);
	Route::get('/studentreport', ['as'=>'studentreport','uses'=>'StudentController@getStudentReport']);    

// --------------------teacher------------------------------------------------

    Route::post('/teachers',['as'=>'createTeacher','uses'=>'TeacherController@createTeacher']);
    Route::get('/teachers', ['as'=>'teachers', 'uses'=>'TeacherController@getTeacher']);

// --------------------classroom------------------------------------------------

 	Route::post('/classroom',['as'=>'createClassroom','uses'=>'ClassroomController@createClassroom']);	
	Route::get('/classroom',['as'=>'classroom','uses'=>'ClassroomController@getClassroom']);


// --------------------classroom Report------------------------------------------------

	Route::post('/classroomreport',['as'=>'createClassroomReport','uses'=>'ClassroomController@createClassroomReport']);	
	Route::get('/classroomreport',['as'=>'classroomreport','uses'=>'ClassroomController@getClassroomReport']);
	Route::get('/classroomdashboard/{class_id}',['as'=>'classroomdashboard', 'uses'=>'ClassroomController@getClassroomDashboard']);


// --------------------Events------------------------------------------------

	Route::post('/event', ['as'=>'createEvent', 'uses'=>'EventController@createEvent']);
	Route::get('/event',['as'=>'event', 'uses'=>'EventController@getEvent']);


// --------------------Parents------------------------------------------------

	Route::post('/parent', ['as'=>'createParent', 'uses'=>'ParentController@createParent']);
	Route::get('/parent', ['as'=>'parent', 'uses'=>'ParentController@getParent']);





// --------------------Teacher------------------------------------------------	

// --------------------API------------------------------------------------

Route::get('/api/class/{class_id}/students', 'Api\StudentController@getStudent');

Route::get('/api/teachers', 'Api\TeacherController@getTeacher');

Route::get('/api/student/{student_id}/reports', 'Api\StudentController@getStudentReport');
Route::post('/api/student/{student_id}/report', 'Api\StudentController@postStudentReport');

Route::get('/api/class/{class_id}/reports', 'Api\ClassController@getClassReport');
Route::post('/api/class/{class_id}/report', 'Api\ClassController@postClassReport');
