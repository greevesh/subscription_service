<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing-page');

// login and register
Auth::routes();
