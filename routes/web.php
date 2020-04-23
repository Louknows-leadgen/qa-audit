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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
	return view('superadmin');
})->name('root')->middleware('checkrole:1');


Route::get('/admin', function(){
	return view('admin');
})->name('admin')->middleware('checkrole:2');

Route::get('/supervisor', function(){
	return view('supervisor');
})->name('supervisor')->middleware('checkrole:3');

Route::get('/auditor', function(){
	return view('auditor.index');
})->name('auditor')->middleware('checkrole:4');


Route::put('/user/update_account','UserController@update_account')
       ->name('user.update_account');
Route::put('/user/update_password','UserController@update_password')
       ->name('user.update_password');
Route::get('/user','UserController@index')->name('user.index');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
