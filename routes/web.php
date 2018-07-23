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

//use URL;

//URL::forceSchema('https');
Route::get('/', function () {
    //return 'hello';
    return view('myhome');
});

//school registration
Route::get('/schoolReg', 'MyschoolsController@index');
///school profile
Route::get('/search', 'MyschoolsController@search');
Route::get('/search_school',array('as'=>'search_school','uses'=>'MyschoolsController@search_school'));
Route::post('/school_profile', 'MyschoolsController@school_profile');
Route::get('/school_home/{campus_id}', 'MyschoolsController@school_home');
Route::get('/profile_gallery/{campus_id}', 'MyschoolsController@profile_gallery');
Route::get('/apply_online/{campus_id}', 'MyschoolsController@admission_form');
Route::post('/apply_online', 'MyschoolsController@submit_admission_form');
////Paypal////
Route::post('checkout','PaypalIntegration_C@checkout');
Route::get('done','PaypalIntegration_C@getDone');
Route::get('cancel','PaypalIntegration_C@getCancel');
/////end Paypal////
Route::post('/schoolRegistration','MyschoolsController@schoolReg');

Auth::routes();

//Route::get('admin_login','AdminAuth\LoginController@showLoginForm');
//Route::post('admin_login','AdminAuth\LoginController@login');
//Route::post('admin_logout','AdminAuth\LoginController@logout');
//Route::post('admin_password/email','AdminAuth\ForgotPasswordController@sendResetLinkEmail');
//Route::get('admin_password/reset','AdminAuth\ForgotPasswordController@showLinkRequestForm');
//Route::post('admin_password/reset','AdminAuth\ResetPasswordController@reset');
//Route::get('admin_password/reset/{token}','AdminAuth\ResetPasswordController@showResetForm');
//Route::get('admin_register','AdminAuth\RegisterController@showRegistrationForm');
//Route::post('admin_register','AdminAuth\RegisterController@register');
Route::get('test', function (){
    return 'test';
});

Route::get('false', function (){
    return 'false';
});
///school admin home
Route::get('/home', 'AdminHomeController@index');
Route::get('/admin_dashboard', 'AdminHomeController@admin_dashboard');
///teache home
Route::get('/teacher', 'TeacherHomeController@index');
//Route::get('/teacherView_class_routine/{teacher_id}', 'TeacherHomeController@teacherView_class_routine');
Route::get('/teacherView_class_routine/{section_id}', 'TeacherHomeController@teacherView_class_routine');
Route::get('/form_upload_result/{section_id}', 'TeacherHomeController@form_upload_result');
Route::post('/ajax_form_upload_result', 'TeacherHomeController@ajax_form_upload_result');
Route::post('/upload_result', 'TeacherHomeController@upload_result');
Route::get('/view_result/{section_id}', 'TeacherHomeController@view_result');
Route::post('/ajax_form_view_result', 'TeacherHomeController@ajax_form_view_result');
Route::get('/mark_attendance/{section_id}', 'TeacherHomeController@mark_attendance');
Route::post('/upload_attendance', 'TeacherHomeController@upload_attendance');
Route::get('/view_attendance/{section_id}', 'TeacherHomeController@view_attendance');
Route::post('/ajax_form_view_attendance', 'TeacherHomeController@ajax_form_view_attendance');




///manageCampuses
Route::get('/campuses', 'ManageCampuses_C@index');
Route::post('/add_campus', 'ManageCampuses_C@add_campus');
Route::get('/edit_campus/{camp_id}', 'ManageCampuses_C@edit_campus');
Route::post('/update_campus', 'ManageCampuses_C@update_campus');
Route::get('/delete_campus/{camp_id}', 'ManageCampuses_C@delete_campus');

/////manage profile
Route::get('/manage_profile_gallery', 'Manageprofile_C@show_manage_profile_gallery');
Route::get('/manage_profile', 'Manageprofile_C@index');
Route::get('/manage_my_profile/edit/{profile_id}', 'Manageprofile_C@edit');
Route::post('/update_profile_gallery','Manageprofile_C@update_profile_gallery');
Route::post('/add_profile_gallery', 'Manageprofile_C@add_profile_gallery');
Route::post('/edit_profile', 'Manageprofile_C@update');
/////Manage employee
Route::post('/update_employee', 'ManageEmployees_C@update_employee');
Route::post('/add_employee', 'ManageEmployees_C@add_employee');
Route::get('/delete_employee/{emp_id}', 'ManageEmployees_C@delete_employee');
Route::get('/new_appointment', 'ManageEmployees_C@add_employee_form');
Route::get('/manage_employees', 'ManageEmployees_C@manage_employee_form');
Route::get('/edit_employee/{emp_id}', 'ManageEmployees_C@edit_employee');
/////Manage classes
Route::get('/manage_classes', 'ManageClassSectionSubject_C@classes');
Route::post('/add_class','ManageClassSectionSubject_C@add_class');
Route::get('/edit_class/{class_id}', 'ManageClassSectionSubject_C@edit_class');
Route::post('/update_class', 'ManageClassSectionSubject_C@update_class');
Route::get('/delete_class/{class_id}', 'ManageClassSectionSubject_C@delete_class');
/////Manage sections
Route::get('/manage_sections', 'ManageClassSectionSubject_C@section');
Route::post('/add_section','ManageClassSectionSubject_C@add_section');
Route::get('/edit_section/{section_id}', 'ManageClassSectionSubject_C@edit_section');
Route::post('/update_section', 'ManageClassSectionSubject_C@update_section');
Route::get('/delete_section/{section_id}', 'ManageClassSectionSubject_C@delete_section');
/////Manage subjects
Route::get('/manage_subjects', 'ManageClassSectionSubject_C@subjects');
Route::post('/add_subject','ManageClassSectionSubject_C@add_subject');
Route::get('/edit_subject/{subject_id}', 'ManageClassSectionSubject_C@edit_subject');
Route::post('/update_subject', 'ManageClassSectionSubject_C@update_subject');
Route::get('/delete_subject/{subject_id}', 'ManageClassSectionSubject_C@delete_subject');
/////manage fee
Route::get('/manage_fee_structure', 'FeeStructure_C@index');
Route::post('/add_fee_structure', 'FeeStructure_C@add_fee_structure');
Route::get('/edit_fee_structure/{fee_str_id}', 'FeeStructure_C@edit_fee_structure');
Route::post('/update_fee_structure', 'FeeStructure_C@update_fee_structure');
Route::get('/delete_fee_structure/{fee_str_id}', 'FeeStructure_C@delete_fee_structure');
//////manage new admissions
Route::get('/new_admission', 'Registration_C@new_admission');
Route::post('/search_student', 'Registration_C@search_student');
Route::post('/new_registration', 'Registration_C@new_registration');
//////manage students
Route::get('/manage_students', 'ManageStudents_C@manage_students');
Route::post('/manage_students', 'ManageStudents_C@count_students');
Route::post('/assign_section', 'ManageStudents_C@assign_section');
///////class_routine
Route::get('/class_routine', 'ClassRoutine_C@class_routine');
Route::get('/button_add_class_routine/{section_id}', 'ClassRoutine_C@button_add_class_routine');
Route::post('/add_class_routine', 'ClassRoutine_C@add_class_routine');
Route::get('/view_class_routine/{section_id}', 'ClassRoutine_C@view_class_routine');
Route::get('/edit_class_routine/{class_routine_id}', 'ClassRoutine_C@edit_class_routine');
Route::post('/update_class_routine', 'ClassRoutine_C@update_class_routine');
Route::get('/delete_class_routine/{class_routine_id}', 'ClassRoutine_C@delete_class_routine');
////////manage class incharge
Route::get('/manage_class_incharge', 'ManageClassIncharge_C@class_incharge');
Route::get('/add_incharge_form', 'ManageClassIncharge_C@view_add_class_incharge_form');
Route::post('/next_add_incharge', 'ManageClassIncharge_C@next_add_incharge');
Route::post('/assign_incharge', 'ManageClassIncharge_C@assign_incharge');
Route::get('/delete_incharge/{teacher_id}', 'ManageClassIncharge_C@delete_incharge');

//////user's
Route::get('/user_teachers', 'ManageUsers_C@manage_teacher_users');

















//Route::group(['middleware' => 'auth'], function () {
//Route::get('user/profile', function () {
//        // Uses Auth Middleware
//
//    });
//});
//Route::group(['middleware' => 'admin.user'], function () {
//
//    Route::get('admin_login','AdminAuth\LoginController@showLoginForm');
//    Route::post('admin_login','AdminAuth\LoginController@login');
//    Route::post('admin_logout','AdminAuth\LoginController@logout');
//    Route::post('admin_password/email','AdminAuth\ForgotPasswordController@sendResetLinkEmail');
//    Route::get('admin_password/reset','AdminAuth\ForgotPasswordController@showLinkRequestForm');
//    Route::post('admin_password/reset','AdminAuth\ResetPasswordController@reset');
//    Route::get('admin_password/reset/{token}','AdminAuth\ResetPasswordController@showResetForm');
//    Route::get('admin_register','AdminAuth\RegisterController@showRegistrationForm');
//    Route::post('admin_register','AdminAuth\RegisterController@register');
//
//    Route::get('/home', 'HomeController@index');
//
//    Route::get('/admin_home', 'AdminHomeController@index');
//
//});


Auth::routes();

Route::get('/home', 'HomeController@index');
