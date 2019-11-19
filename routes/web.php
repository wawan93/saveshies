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
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/volunteers', function () {
    return view('volunteers');
})->name('volunteers');

Route::get('/support', function () {
    return view('support');
})->name('support');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::post('/donate', 'DonationController@donate')->name('donate');

Route::resource('admin/projects', 'Admin\\ProjectsController');

Route::resource('admin/projects', 'Admin\\ProjectsController');
Route::resource('admin/projects', 'Admin\\ProjectsController');
Route::resource('admin/projects', 'Admin\\ProjectsController');
Route::resource('admin/projects', 'Admin\\ProjectsController');
Route::resource('admin/projects', 'Admin\\ProjectsController');