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
	Route::get('/dashboard','App\Http\Controllers\Backend\DashboardController@dashboard')->middleware(['auth'])->name('dashboard');


	Route::group(['prefix' => 'category'], function(){ 
		Route::get('/manage', 'App\Http\Controllers\Backend\CategoryController@index')->name('category.manage');
		Route::get('/create', 'App\Http\Controllers\Backend\CategoryController@create')->name('category.create');
		Route::post('/store', 'App\Http\Controllers\Backend\CategoryController@store')->name('category.store');
		Route::get('/edit/{id}', 'App\Http\Controllers\Backend\CategoryController@edit')->name('category.edit');
		Route::post('/update/{id}', 'App\Http\Controllers\Backend\CategoryController@update')->name('category.update');
		Route::get('/destroy/{id}', 'App\Http\Controllers\Backend\CategoryController@destroy')->name('category.destroy');

	});

	
});


require __DIR__.'/auth.php';
