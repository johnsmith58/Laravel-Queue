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


//queue test
Route::get('customer', 'CustomerController@index')->name('customer.index');
Route::get('customer/list', 'CustomerController@list')->name('customer.list');
Route::post('customer/search', 'CustomerController@search')->name('customer.search');
Route::post('customer-save', 'CustomerController@save')->name('customer.save');
