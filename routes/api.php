<?php

use App\Http\Controllers\ProInvInfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum'); // keycloak-web

Route::controller(ProInvInfoController::class)
    ->name('inventory.')
    ->group(function () {
        Route::get('/inventory', 'index')->name('index');
        // Route::post('/inventory', 'store')->name('store');
        Route::get('/inventory/{proInvInfo}', 'show')->name('show');
        // Route::put('/inventory/{proInvInfo}', 'update')->name('update');
    });
