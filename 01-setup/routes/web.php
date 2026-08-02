<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'message' => 'Halo Laravel, Saya Siap Belajar!',
        'items' => ['Satu', 'Dua', 'Tiga'],
    ]);
});
