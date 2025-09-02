<?php

use App\Http\Controllers\StatisticsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/statistics', [StatisticsController::class, 'index'])
    ->name('statistics')
    ->middleware('auth');
