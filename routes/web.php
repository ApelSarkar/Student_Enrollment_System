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
Route::middleware(['web'])->group(function () {
    Route::get('/logout','AdminController@logout');

Route::get('/', function () {
    return view('student_login');
});


Route::get('/backend', function () {
    return view('admin.admin_login');
});

//admin login....

Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admindashboard');
Route::post('/studentlogin','AdminController@student_login_dashboard');

Route::post('/student_setting','AdminController@studentsetting');

Route::get('/student_dashboard','AdminController@student_dashboard');

//add student

Route::get('/addstudent','AddstudentsController@addstudent');
Route::post('/save_student','AddstudentsController@savestudent');
//student update
Route::post('/student_own_update','StudentController@studentupdate');



//studentsetting
Route::get('/student_setting','AddstudentsController@studentsetting');
Route::get('/student_profile','AddstudentsController@studentprofile');
Route::get('/student_logout','AddstudentsController@studentlogout');


Route::get('/allstudent','AllstudentsController@allstudent');
Route::get('/student_delete/{Student_id}','AllstudentsController@s_delete');
Route::get('/studentview/{Student_id}','AllstudentsController@studentview');
Route::get('/student_edit/{Student_id}','AllstudentsController@studentedit');
Route::post('/update_student/{Student_id}','AllstudentsController@updatestudent');


Route::get('/tutionfee','TutionController@tution');
Route::get('/cse','CSEController@cse');
Route::get('/eee','EEEController@eee');
Route::get('/ece','ECEController@ece');
Route::get('/mba','MBAController@mba');
Route::get('/bba','BBAController@bba');

Route::get('/allteacher','TeacherController@allteacher');

Route::get('/addteacher','TeacherController@addteacher');
Route::post('/save_teacher','TeacherController@saveteacher');
Route::get('/teacher_delete/{teachers_id}','TeacherController@teacherdelete');



Route::get('/view','ViewController@view');
Route::get('/setting','SettingController@setting');





    
});

    
