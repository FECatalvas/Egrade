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
    return view('auth.login');
});


Route::get('/admin/Dashboard','StudentController@showannouncements')->name('admin/Dashboard');

Route::get('/admin/course/{id}','StudentController@create')->name('addStudent');
Route::any('/admin/create','StudentController@insert')->name('admin/create');

Route::get('/admin/viewStudent/{id?}','UserController@showStudent')->name('showStudent');
Route::get('admin/showlistOfStudent/{id}','StudentController@showListOfStudent')->name('showStudentsInCourse');

Route::get('/admin/addCourseForm','StudentController@addCourses')->name('admin/addCourse');
Route::post('/admin/addCourses','StudentController@insertCourse')->name('admin/addCourses');
Route::get('/admin/showCourses','StudentController@showCourses')->name('admin/showCourses');

Route::get('/admin/addAnnouncementForm','StudentController@addAnnouncementForm')->name('admin/addAnnouncementForm');
Route::post('/admin/addAnnouncement','StudentController@addAnnouncement')->name('admin/addAnnouncement');

Route::get('/admin/edit/{id}','StudentController@edit')->name('admin/edit');
Route::post('/admin/update/{id}','StudentController@update')->name('admin/update');
Route::get('delete/{id}','StudentController@delete');

Route::post('/admin/insertGrade','StudentController@insertGrades')->name('admin/showGrades');
Route::get('/admin/showGrades','StudentController@showGrades')->name('admin/showGrades');



Auth::routes();

Route::group(['middleware' => 'guest:user'], function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('submit_login', 'Auth\LoginController@userPostLogin')->name('loginsubmit');
    Route::get('register', 'Auth\RegisterController@userRegisterIndex')->name('userregister');
    Route::get('dashboard', 'Auth\LoginController@dashboard')->name('dashboard');
    Route::post('registersubmit', 'Auth\RegisterController@userPostRegistration')->name('registersubmit');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});


Route::group(['middleware' => 'guest:admin'], function () {
    Route::get('adminlogin', 'Auth\AdminLoginController@showLoginForm')->name('adminlogin');
    Route::post('adminlogin', 'Auth\AdminLoginController@adminloginpost')->name('login');
    Route::get('admindashboard', 'Auth\AdminLoginController@admindashboard')->name('admindashboard');
    Route::get('back', 'Auth\AdminLoginController@back')->name('back');
    Route::get('logoutadmin', 'Auth\AdminLoginController@adminlogout')->name('adminlogout');
});


