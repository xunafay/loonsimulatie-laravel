<?php

use App\Http\Controllers\PayScaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/payscales', [PayScaleController::class, 'index']);
