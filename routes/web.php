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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'StripePaymentController@payWithStripe')->name('stripform');
Route::get('stripe', 'StripePaymentController@payWithStripe')->name('stripform');
Route::post('stripe','StripePaymentController@postPaymentWithStripe')->name('paywithstripe');
