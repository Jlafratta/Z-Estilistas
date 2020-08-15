<?php

use Illuminate\Support\Facades\Route;

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
    return view(SITE_PATH.'home', ['title' => 'Inicio']);
})->name('home');

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

/**
 * Login & Register
 */

Route::get('/login', function () {
     return view(ADMIN_PATH.'login');
 })->name('login');

Route::get('/signup', function () {
    return view(ADMIN_PATH.'signup');
})->name('signup');

Route::get('/signup-finish', function () {
    return view(ADMIN_PATH.'signup-finish');
})->name('signup-finish');