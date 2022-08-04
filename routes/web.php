<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('teacher/login',function(){
    return view('teacher.login');
});
Route::get('student/login',function(){
    return view('student.login');
});
Route::get('admin/login',function(){
    return view('admin.login');
});
Route::get('student-register',function(){
    return view('admin.student_register');
});

