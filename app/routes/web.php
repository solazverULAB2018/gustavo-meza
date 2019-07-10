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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Frontend'], function() {
	Route::get('/', 'FrontOrderController@index')->name('front.order');
	Route::post('/order/create', 'FrontOrderController@saveOrder')->name('front.save-order');
	Route::get('/mis-pedidos', 'FrontOrderController@myOrders')->name('front.my-orders');
});

Auth::routes();

Route::group(['namespace' => 'Backend'], function() {
	Route::resource('tpizzas', 'TpizzaController');
	Route::resource('pizzas', 'PizzaController');
	Route::resource('drinks', 'DrinkController');
	Route::resource('extras', 'ExtraController');
	Route::get('/pedidos', 'BackOrderController@index')->name('back.order');
});
