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
Route::get('/test', function () {
    return view('test');
});
Route::get('/bookings/input', function () {
    return view('bookings.input');
});
Route::get('/bookings/search', function () {
    return view('bookings.search');
});
Route::get('/receipt', function () {
    return view('receipt');
});
Route::get('/employee', function () {
    return view('employee');
});


Auth::routes();


// Route::post('/bookings', 'BookingsController@store');


// Route::get('/searchbookings', function () {
//     return view('searchbookings');
// });


Route::post('/bookings/search', 'BookingsController@search');

Route::resource('bookings','BookingsController');


Route::post('/showreceipt', 'ReceiptController@index');

Route::post('/receiptstore', 'ReceiptController@store');

Route::post('/employeestore', 'EmployeeController@store');



