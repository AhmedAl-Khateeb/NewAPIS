<?php

use App\Http\Controllers\AboutUsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;






Route::prefix('about_us')->group(function () {

    Route::get('/index', [AboutUsController::class, 'index']);

    Route::get('show/{id}', [AboutUsController::class, 'show']);
    Route::put('/update/{id}', [AboutUsController::class, 'update']);
});
