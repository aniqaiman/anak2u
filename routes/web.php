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
	return view('layout.master');
});

Route::get('/student/{student_id}/studentdashboard', ['as' => 'studentdashboard','uses' =>'StudentController@studentDashboard']);
Route::get('/dashboard', ['as'=>'dashboard', 'uses'=>'ClassroomController@getDashboard']);
Route::get('/institutes/{institute_id}/institutedashboard', ['as'=>'institutedashboard', 'uses'=>'DashboardController@getDashboard']);
Route::get('/classroom/{class_id}/classroomdashboard', ['as'=>'classroomdashboard','uses'=>'DashboardController@getClassroomDashboard']);

// Route::get('/classroomdashboard/{class_id}',['as'=>'classroomdashboard', 'uses'=>'ClassroomController@getClassroomDashboard']);

// --------------------Institute------------------------------------------------	

Route::post('/institute', ['as'=>'createInstitute', 'uses'=>'InstituteController@createInstitute']);
Route::get('/institute', ['as'=>'institute', 'uses'=>'InstituteController@getInstitute']);
Route::get('editInstitute/{institute_id}', ['as'=>'editInstitute','uses'=>'InstituteController@editInstitute']);
Route::post('updateInstitute',['as'=>'updateInstitute','uses'=>'InstituteController@updateInstitute']);
Route::delete('/institute/{institute_id}',['as'=>'deleteInstitute','uses'=>'InstituteController@deleteInstitute']);

// --------------------classroom------------------------------------------------

Route::post('/classroom',['as'=>'createClassroom','uses'=>'ClassroomController@createClassroom']);	
Route::get('/institute/{institute_id}/classroom',['as'=>'classroom','uses'=>'ClassroomController@getClassroom']);

// --------------------teacher------------------------------------------------

Route::post('/teachers',['as'=>'createTeacher','uses'=>'TeacherController@createTeacher']);
Route::get('/institute/{institute_id}/teachers', ['as'=>'teachers', 'uses'=>'TeacherController@getTeacher']);
Route::get('/institute/{institute_id}/editTeacher/{teacher_id}', ['as'=>'editTeacher','uses'=>'TeacherController@editTeacher']);
Route::post('updateTeacher',['as'=>'updateTeacher','uses'=>'TeacherController@updateTeacher']);

// --------------------Student------------------------------------------------

Route::post('/students',['as'=>'createStudent','uses'=>'StudentController@createStudent']);
Route::get('/classroom/{class_id}/students', ['as'=>'students', 'uses'=>'StudentController@getStudent']);

// --------------------Parents------------------------------------------------

Route::post('/parents', ['as'=>'createParent', 'uses'=>'ParentController@createParent']);
Route::get('/institute/{institute_id}/parents', ['as'=>'parents', 'uses'=>'ParentController@getParent']);
Route::get('/institute/{institute_id}/editParent/{parent_id}',['as'=>'editParent','uses'=>'ParentController@editParent']);
Route::post('updateParent',['as'=>'updateParent','uses'=>'ParentController@updateParent']);

// --------------------Events------------------------------------------------

Route::post('/event', ['as'=>'createEvent', 'uses'=>'EventController@createEvent']);
Route::get('/classroom/{class_id}/event',['as'=>'event', 'uses'=>'EventController@getEvent']);

// --------------------Student Report------------------------------------------------

Route::post('/studentreport', ['as'=>'createStudentReport', 'uses'=>'StudentController@createStudentReport']);
Route::get('/studentreport', ['as'=>'studentreport','uses'=>'StudentController@getStudentReport']);    

// --------------------classroom Report------------------------------------------------

Route::post('/classroomreport',['as'=>'createClassroomReport','uses'=>'ClassroomController@createClassroomReport']);	
Route::get('/classroomreport',['as'=>'classroomreport','uses'=>'ClassroomController@getClassroomReport']);






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');