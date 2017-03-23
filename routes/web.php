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

use App\Student;

// routes for Asignment Student Registration 

Route::get('studentRegistration-form', function(){
	return view('studentRegistration-form');
});
// test
Route::get('/students', 'StudentController@showStudents');
// student-registration
Route::get('/studentRegistration-complete', 'StudentController@processRegistration');//-form @showForm, 
Route::get('/add-student', 'StudentController@showForm');
Route::post('/add-student', 'StudentController@addStudent'); // process-registration
Route::get('/edit/{id}', 'StudentController@editStudentInfo');
Route::post('/save-student', 'StudentController@saveStudent');
Route::get('/delete/{id}', 'StudentController@deleteStudent');





// routes for project blog deCoders

Route::get('master', function() {
  return View('layoutProject/master');
});

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/blogList', 'PostsController@showList');

//for comment
Route::post('/posts/{post}/comments', 'CommentsController@store');

//to register
Route::get('/registerUser', 'AuthController@register');
Route::post('/registerUser', 'AuthController@storeUser');

//to login and logout
Route::get('/bye', 'AuthController@logoutSignedUser');
Route::get('/log', 'AuthController@login');
Route::post('/loginUser', 'AuthController@storeSignedInUser');




Auth::routes();

Route::get('/home', 'HomeController@index');