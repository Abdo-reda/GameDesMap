<?php

use App\Http\Controllers\MapController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('map')->group(function () {
    Route::apiResource('', MapController::class)->parameters(['' => 'map']);;
});

