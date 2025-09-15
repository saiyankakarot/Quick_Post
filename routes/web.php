<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return redirect()->route('posts.index');
});

Route::resource('posts', PostController::class);
