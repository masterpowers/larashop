<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/test', function () {
    return view('welcome');
});
Route::get('/admin', 'Backend\HomeController@index');

Route::resource('/admin/category', 'Backend\CategoriesController');
Route::resource('/admin/product', 'Backend\ProductsController');
Route::resource('/admin/order', 'Backend\OrdersController');
Route::resource('/admin/customer', 'Backend\CustomersController');
Route::resource('/admin/settings', 'Backend\SettingsController');

