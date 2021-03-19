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

Auth::routes(['register' => True]);

Route::get('/', 'HomeController@index')->name('index');

Route::resource('customer', 'CustomerController');
Route::get('/regpage', 'CustomerController@regpage')->name('customer.regpage');
Route::get('/show', 'CustomerController@cusview')->name('customer.show');
Route::get('/issue', 'CustomerController@issue')->name('customer.issue');
Route::get('/payment', 'CustomerController@payment')->name('customer.payment');

Route::resource('bill', 'BillController');
Route::get('/invoice', 'BillController@invoice')->name('bill.invoice');
Route::get('/dataupdate', 'BillController@dataupdate')->name('bill.dataupdate');
Route::get('/receipt', 'BillController@receipt')->name('bill.receipt');
Route::get('/receipt1', 'BillController@receipt1')->name('bill.receipt1');
Route::get('/nobill', 'BillController@nobill')->name('bill.nobill');
