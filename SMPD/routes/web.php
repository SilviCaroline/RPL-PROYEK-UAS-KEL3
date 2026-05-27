<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/public-opac', function () {
    return view('public-opac');
});