<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // define the variable
    $name = 'John Doe';
    return view('welcome');
});
