<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend ');
});

Route::get('/backend', function () {
    return view('backend ');
});
