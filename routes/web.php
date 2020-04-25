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

Route::get('/dashboard', 'DashboardController@index');

Route::get('/dashboard/{nama}','DashboardController@show');

Route::get('/home', 'HomeController@index');

// Route::get('/home', function(){
//     return "Hello world";
// });

// Route::get('/rehan', function(){
//     return "Hello Rehan";
// });

// Route::get('/nama/{nama}', function ($nama) {
//     return "Hello ".$nama;
// });