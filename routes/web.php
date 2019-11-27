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
Route::get('/thank-you', 'IndexController@thankYou')->name('thank-you');
Route::get('/ref/{ref}', 'IndexController@referral')->name('referral');

Auth::routes();

Route::post('/donate', 'DonationController@donate')->name('donate');
Route::post('/donate/upload-photo', 'DonationController@uploadPhoto');
Route::post('/register-volunteer', 'DonorController@registerVolunteer');

Route::prefix('/admin')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('home');

        Route::resource('projects', 'Admin\\ProjectsController');
    });
