<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RouteController::class, 'index'])->name('app.home');
Route::post('/route/store', [RouteController::class, 'store'])->name('route.store');
Route::post('/update-route-order', [RouteController::class, 'updateOrder'])->name('routes.updateOrder');
Route::delete('/trips/{id}', [RouteController::class, 'destroy'])->name('trips.destroy');


