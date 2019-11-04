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

//Admin logout.................................................
Route::get('/logout', 'AdminController@logout');
//Student logout.................................................
Route::get('/student_logout', 'AdminController@student_logout');


Route::get('/', function () {
    return view('student_login');
});

Route::get('/backend', function () {
    return view('admin.admin_login');
});

// admin login part..........................................
Route::post('/adminlogin', 'AdminController@login_dashboard');
Route::get('/admin_dashboard', 'AdminController@admin_dashboard');
Route::get('/viewprofile', 'AdminController@viewprofile');
Route::get('/setting', 'AdminController@setting');
Route::get('/student_setting', 'AdminController@studentsetting');

// student login part..........................................
Route::post('/studentlogin', 'AdminController@student_login_dashboard');
Route::get('/student_dashboard', 'AdminController@student_dashboard');
Route::get('/student_viewprofile', 'AddstudentController@studentviewprofile');

//AddStudent.............................................
Route::get('/addstudent', 'AddstudentController@addstudent');
Route::post('/save_student', 'AddstudentController@savestudent');

//All Student ..........................................


Route::get('/delete_student/{student_id}', 'AllstudentController@deletestudent');
Route::get('/studentview/{student_id}', 'AllstudentController@viewstudent');
Route::get('/edit_student/{student_id}', 'AllstudentController@studentedit');
Route::post('/update_student/{student_id}', 'AllstudentController@studentupdate');
Route::post('/update_onw_student', 'AllstudentController@studentonwupdate');

//All Student page are here.....................................
Route::get('/allstudent', 'AllstudentController@allstudent');

//All page raute are here..................................
Route::get('/tutionfee', 'TutionfeeController@tution');
Route::get('/cse', 'CSEController@cse');
Route::get('/ece', 'ECEController@ece');
Route::get('/eee', 'EEEController@eee');
Route::get('/mba', 'MBAController@mba');
Route::get('/bba', 'BBAController@bba');

//Add Teacher pge are...............................
Route::get('/addteacher', 'AddteacherController@addteacher');
Route::post('/save_teacher', 'AddteacherController@saveteacher');

// All Teacher page are..............................
Route::get('/allteacher', 'AllteacherController@allteacher');
Route::get('/delete_teacher/{teacher_id}', 'AllteacherController@deleteteacher');


