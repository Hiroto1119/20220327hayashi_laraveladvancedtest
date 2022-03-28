<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']);
Route::post('/store', [PostController::class, 'store']);
Route::get('/thanks', [PostController::class, 'thanks'])
    ->name('thanks');
