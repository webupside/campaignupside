<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('{name?}','Admire2Controller@showView');

Route::get('users','Admire2Controller@index');

Route::post('users','Admire2Controller@store');


