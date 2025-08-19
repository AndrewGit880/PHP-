<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello world!';
});

Route::resource('posts', PostController::class);
