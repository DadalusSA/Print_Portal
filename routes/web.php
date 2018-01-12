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


Route::get('/noob', function () {
    return "Tell me whos noob";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::middleware(['auth'])->group(function (){

Route::resource('orderdetails', 'FrontEnd\OrderdetailsController');

Route::resource('uploaddetails', 'FrontEnd\UploaddetailsController');


Route::get('/uploaddetails', 'FrontEnd\UploaddetailsController@create');

Route::get('/orderdetails', 'FrontEnd\OrderdetailsController@create');

Route::get('/orderdetails/create', function()
{
	return view('auth.login');
});


Route::resource('users', 'UsersController');

//});
