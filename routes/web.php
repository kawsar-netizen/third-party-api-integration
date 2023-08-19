<?php

use Illuminate\Support\Facades\Route;


Route::get('/fetch', [App\Http\Controllers\QuestionController::class, 'fetchInsert']);
Route::get('/', [App\Http\Controllers\QuestionController::class, 'show']);
