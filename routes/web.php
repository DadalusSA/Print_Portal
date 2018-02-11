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

Route::get('/uploadedfile/{link}/{folder}/{filename}', 'FrontEnd\UploaddetailsController@download');

Route::get('/uploadedfile/1/1', 'FrontEnd\UploaddetailsController@download');

Route::get('/uploaddetails', 'FrontEnd\UploaddetailsController@create');

Route::get('/uploaddetails', 'FrontEnd\UploaddetailsController@create');

Route::get('/orderdetails', 'FrontEnd\OrderdetailsController@create');

Route::get('/orderdetails/create', function()
{
	return view('auth.login');
});

<<<<<<< HEAD
Route::get('projects/create/{id?}', 'ProjectsController@create');
=======
>>>>>>> d5532b219e87495c551539ec791b1105dec605c0

Route::resource('users', 'UsersController');

//});
