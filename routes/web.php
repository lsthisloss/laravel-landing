<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/editorial-principles');
});

Route::get('/editorial-principles', function () {
    return view('editorial-principles');
});
