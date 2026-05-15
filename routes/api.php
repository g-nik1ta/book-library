<?php

use App\Http\Controllers\Api\BookController;
use Illuminate\Support\Facades\Route;

Route::apiResource('books', BookController::class);

Route::get('/test', function () {
    return 'OK';
});