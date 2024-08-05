<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HostingPlanController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/section2', [HostingPlanController::class, 'section2']);
// Route::get('/section4', [HostingPlanController::class, 'section4']);
// Route::get('/videos', [HostingPlanController::class, 'section9']);
Route::get('/dashboard', [HostingPlanController::class, 'index']);