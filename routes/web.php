<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'message' => 'Halo Laravel, Saya Siap Belajar!',
        'items' => ['Satu', 'Dua', 'Tiga'],
    ]);
});

Route::get('/hello', [HomeController::class, 'hello']);
