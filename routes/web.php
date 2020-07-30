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
Route::get('customer', 'Customer2Controller@index')->name('customer.index');
Route::get('customer/list', 'Customer2Controller@list')->name('customer.list');
Route::post('customer/search', 'Customer2Controller@search')->name('customer.search');
Route::post('customer-save', 'Customer2Controller@save')->name('customer.save');


Route::get('test', function(){
    $customer = \App\Customer::all();
    dd($customer);
});
