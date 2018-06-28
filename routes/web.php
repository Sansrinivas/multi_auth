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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function(){

	Route::group(['middleware' => 'guest:admin'], function(){

		Route::get('login', 'Auth\AdminLoginController@index')->name('admin.login');

		Route::post('login', 'Auth\AdminLoginController@login')->name('admin.submit');
	});

Route::post('customer', 'CustomersController@store')->name('customer.store');

	Route::group(['middleware' => 'auth:admin'], function(){

		Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');

		Route::get('customer', 'CustomersController@index')->name('customer.view');

		Route::get('customer/create', 'CustomersController@create')->name('customer.create');

		Route::post('logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
	});

});