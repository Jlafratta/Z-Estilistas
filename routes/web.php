<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

define('SITE_PATH', 'site/');
define('ADMIN_PATH', 'admin/');

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


/**
 *  Site routes
 */

Route::get('/', function () {
    return view(SITE_PATH.'index', ['title' => 'Inicio']);
})->name('index');

Route::get('/about', function () {
    return view(SITE_PATH.'about-us', ['title' => 'Quienes somos']);
})->name('about-us');

Route::get('/gallery', function () {
    return view(SITE_PATH.'gallery', ['title' => 'Galeria']);
})->name('gallery');

Route::get('/contact', function () {
    return view(SITE_PATH.'contact', ['title' => 'Contacto']);
})->name('contact');

Route::get('/services', function () {
    return view(SITE_PATH.'services', ['title' => 'Servicios']);
})->name('services');


Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('admin.home');


/**
 * Admin dashboard
 */

 Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users', 'UsersController');
    Route::get('/users','UsersController@index')->name('users');
 });