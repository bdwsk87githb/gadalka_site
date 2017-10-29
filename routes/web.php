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

//Main_page
Route::get('/', function () {
	return view('index');
});

//Pages //
Route::get('/{page}', function ($page) {
    return view('page');
});

//Services
Route::get('/services/', function () {
	return view('services');
});

//Services_single
Route::get('/services/{name}', function () {
	return view('service');
});