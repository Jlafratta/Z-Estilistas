<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

/**
 * Social media Auth
 */
Route::get('login/{driver}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{driver}/callback', 'Auth\LoginController@handleProviderCallback');

/** 
* Site Routes 
*/
Route::get('/', 'HomeController@index')->name('index');
Route::get('/about', 'HomeController@about')->name('about-us');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/services', 'HomeController@services')->name('services');

/**
* PHPMailer 
*/
Route::get('/sendMail', 'PhpmailerController@sendEmail')->name('sendMail');

/** 
* Dashboard Routes 
*/
Route::namespace('Admin')->prefix('dashboard')->middleware('can:adm-emp-gate')->name('admin.')->group(function(){

    Route::resource('/turnos', 'AppointmentController');
		Route::get('/daily', 'AppointmentController@daily')->name('turnos.daily');
		Route::post('/turnos/nuevo', 'AppointmentController@chooseTime')->name('turnos.chooseTime');
		Route::post('/turnos/transitorio', 'AppointmentController@chooseTimeTransit')->name('turnos.chooseTimeTransit');
		Route::post('/turnos/finish/{id}', 'AppointmentController@finish')->name('turnos.finish');
    	
    Route::resource('/services', 'ProductController');
	
	Route::resource('/stock', 'ServiceController');

    Route::resource('/users', 'UserController');
    	Route::get('/employees', 'UserController@employees')->name('users.employees');
    	Route::get('/clients', 'UserController@clients')->name('users.clients');
});

/**
 * Client Routes
 */
Route::namespace('Admin')->prefix('client')->middleware('can:client-gate')->name('client.')->group(function(){

    Route::get('/turno', 'AppointmentController@new')->name('turnos.new');

});



