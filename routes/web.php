<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing-page')->name('landing');

Route::get('subscribe', 'SubscribeController@storePaymentMethod')->name('subscribe');

Route::post('subscribed', 'SubscribeController@subscribe')->name('subscribed'); 

// login and register
Auth::routes();
