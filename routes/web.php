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

//Route::group(['prefix' => 'belajar'], function(){...});

//Route::get('/', function (){
    //return view(view:'welcome');
//});

//Route::get('/home', function (){
    //return view(view:'index');
//});

//Route::get('/kontak/{hp?}', function ($hp){
    //return view(view:'kontak', ['handphone' => $hp]);
//});

//Route::get('/tentang-kami', function (){
    //return view(view:'tentang');
//});