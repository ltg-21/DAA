<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HydrationController;

Route::middleware(['auth'])->group(function () {
    Route::get('/hydration', [HydrationController::class, 'index']);
    Route::post('/hydration', [HydrationController::class, 'store']);
});

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(env('ASSET_PREFIX', '').'/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(env('ASSET_PREFIX', '').'/livewire/livewire.js', $handle);
});
/*
/ END
*/

Route::get('/', function () {
    return view('welcome');
});
