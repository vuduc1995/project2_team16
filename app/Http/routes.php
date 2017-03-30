<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
   return view('home');
});

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::post('/user/login',array('uses'=>'LogInController@checkLogin'));

Route::get('/student', function () {
   return view('stud-home');
});

Route::get('/admin', function () {
   return view('admin-home');
});

Route::get('/collegeinstructor', function () {
   return view('col-instructor-home');
});

Route::get('/collegeintershipmanager', function () {
   return view('col-manager-home');
});

Route::get('/companyrepresentative', function () {
   return view('comp-representative-home');
});

Route::get('/companyinstructor', function () {
   return view('comp-instructor-home');
});

Route::get('/student/CV', function () {
   return view('stud-manage-cv');
});

Route::get('/student/registration', function () {
   return view('stud-regist');
});

Route::get('/student/report', function () {
   return view('stud-report');
});

Route::get('/comp-representative/Registration', function () {
   return view('comp-representative-regis');
});




Route::get('foo/bar', function () {
   return 'Hello World111';
});

Route::post('foo/bar', function () {
   return 'Hello World';
});



Route::put('foo/bar', function () {
   //
});

Route::delete('foo/bar', function () {
   //
});

Route::get('ID/{id}',function($id){
   echo 'ID: '.$id;
});

// Third Route method – Root URL with or without name will match this method
Route::get('/user/{name?}',function($name = 'Virat Gandhi'){
   echo "Name: ".$name;
});

Route::get('/register',function(){
   return view('register');
});
Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));
Route::get('view-records','StudViewController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
