<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', ['title' => 'Inicio']);
})->name('home');

Route::get('/about', function () {
    return view('about-us', ['title' => 'Quienes somos']);
})->name('about-us');

Route::get('/gallery', function () {
    return view('gallery', ['title' => 'Galeria']);
})->name('gallery');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contacto']);
})->name('contact');

Route::get('/services', function () {
    return view('services', ['title' => 'Servicios']);
})->name('services');
