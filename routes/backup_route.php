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

// frontend---------------------------------------------------------------


Route::get('/','App\Http\Controllers\Frontend\PageController@index');

// backend---------------------------------------------------------------
Route::group(['prefix' => 'admin'], function(){
	Route::get('/dashboard','App\Http\Controllers\Backend\DashboardController@dashboard');
	// login
	Route::get('/login','App\Http\Controllers\Backend\loginController@login');
});