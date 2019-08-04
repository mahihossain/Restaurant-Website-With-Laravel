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
    return view('index');
});
Route::get('/bookings/input', function () {
    return view('bookings.input');
});
Route::get('/bookings/search', function () {
    return view('bookings.search');
});
Route::get('showreceipt', 'ReceiptController@index');


Auth::routes();


Route::post('/bookings/search', 'BookingsController@search');

Route::resource('bookings','BookingsController');
Route::resource('serving_employee','ServingEmployeesController');
Route::resource('cooking_employee','CookingEmployeesController');



Route::post('/receipt/search', 'ReceiptController@search');
Route::post('/receiptstore', 'ReceiptController@store');






