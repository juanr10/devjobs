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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Protected Routes
 * Vacants management
 */
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/vacants', 'VacantController@index')->name('vacants.index');
    Route::get('/vacants/create', 'VacantController@create')->name('vacants.create');
    Route::post('/vacants', 'VacantController@store')->name('vacants.store');

    //Images management
    Route::post('/vacants/uploadimage', 'VacantController@uploadImage')->name('vacants.upload.image');
    Route::post('/vacants/deleteimage', 'VacantController@deleteImage')->name('vacants.delete.image');
});

/**
 * Public Routes
 */
Route::get('/vacants/{vacant}', 'VacantController@show')->name('vacants.show');
Route::post('/applicants/store', 'ApplicantController@store')->name('applicants.store');



