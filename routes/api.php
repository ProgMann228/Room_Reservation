<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::post('/booking/create', [BookingController::class, 'create']);
Route::get('/booking/filter', [RoomController::class, 'filter']);
Route::get('/booking/calendar', [BookingController::class, 'calendar']);
Route::delete('/booking/delete/{id}', [BookingController::class, 'delete']);
Route::get('/booking/{date}', [BookingController::class, 'show']);
