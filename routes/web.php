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
Route::group(['namespace'=>'user'],function(){
	// user section controller
Route::get('/', 'homecontroller@index');

// POST CONTROLLER POST DATA
Route::get('/post/{post}', 'postcontroller@post')->name('post');

Route::get('/post/tag/{tag}', 'homecontroller@tag')->name('tag');

Route::get('/post/category/{category}', 'homecontroller@category')->name('category');
});






Route::group(['prefix'=>'admin'],function(){
	Route::group(['namespace'=>'admin'],function(){
		//admin section controller here
				Route::get('home','homecontroller@index')->name('admin.home');
				Route::resource('post','postcontroller');
				Route::resource('user','usercontroller');
				Route::resource('tag','tagcontroller');
				Route::resource('category','categorycontroller');
	});
 
});

Route::get('/book','bookcontroller@index');
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
