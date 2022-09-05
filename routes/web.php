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
    return view('welcome');
});

Route::get('/siswa', function(){
    echo 'siswa';
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/class', function () {
    return view('class');
});

Route::get('/teacher', function () {
    return view('teacher');
});

Route::get('/students', function () {
    return view('students');
});

Route::get('/cadangan', function () {
    return view('cadangan');
});
//CRUD
Route::get('student', 'StudentController@index');







