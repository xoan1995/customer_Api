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
Route::get('/customers','CustomerController@index')->name('customers.index');
Route::get('/customers/{customersId}','CustomerController@show')->name('customers.show');
Route::post('/customers', 'CustomerController@store')->name('customers.store');
Route::put('/customers/{customerId}','CustomerController@update')->name('customers.update');
Route::delete('/customers/{customerId}', 'CustomerController@destroy')->name('customers.destroy');
