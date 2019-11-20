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
Route::get('/', 'IndexController@index')->name('index');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/volunteers', 'IndexController@volunteers')->name('volunteers');
Route::get('/support', 'IndexController@support')->name('support');

Auth::routes();

Route::post('/donate', 'DonationController@donate')->name('donate');

Route::prefix('/admin')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('home');

        Route::resource('projects', 'Admin\\ProjectsController');
    });
