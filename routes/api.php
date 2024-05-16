<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\LandlordController;
use Illuminate\Support\Facades\Route;

Route::get('bookings/get', [BookingController::class, 'getByLandlordId']);
Route::get('landlord/get', [LandlordController::class, 'getById']);
Route::get('landlord/accommodation/get', [LandlordController::class, 'getByAccommodationId']);
