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
    return view('index');
});
Route::get('/authentication-login.html', function () {
    return view('authentication-login');
});
Route::get('/authentication-register.html', function () {
    return view('authentication-register');
});
Route::get('/charts.html', function () {
    return view('charts');
});
Route::get('/error-403.html', function () {
    return view('error-403');
});
Route::get('/error-404.html', function () {
    return view('error-404');
});
Route::get('/error-405.html', function () {
    return view('error-405');
});
Route::get('/error-500.html', function () {
    return view('error-500');
});
Route::get('/form-basic.html', function () {
    return view('form-basic');
});
Route::get('/form-wizard.html', function () {
    return view('form-wizard');
});
Route::get('/grid.html', function () {
    return view('grid');
});
Route::get('/icon-fontawesome.html', function () {
    return view('icon-fontawesome');
});
Route::get('/icon-material.html', function () {
    return view('icon-material');
});
Route::get('/index.html', function () {
    return view('index');
});
Route::get('/index2.html', function () {
    return view('index2');
});
Route::get('/pages-buttons.html', function () {
    return view('pages-buttons');
});
Route::get('/pages-calendar.html', function () {
    return view('pages-calendar');
});
Route::get('/pages-chat.html', function () {
    return view('pages-chat');
});
Route::get('/pages-elements.html', function () {
    return view('pages-elements');
});
Route::get('/pages-gallery.html', function () {
    return view('pages-gallery');
});
Route::get('/pages-invoice.html', function () {
    return view('pages-invoice');
});
Route::get('/tables.html', function () {
    return view('tables');
});
Route::get('/widgets.html', function () {
    return view('widgets');
});
