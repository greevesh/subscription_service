<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing-page')->name('landing');
Route::view('subscribe', 'subscribe')->name('subscribe'); 

// login and register
Auth::routes();
