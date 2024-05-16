<?php

use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LandlordController;
use Illuminate\Support\Facades\Route;

Route::get('accommodations/get', [AccommodationController::class, 'getAll']);
Route::get('accommodation/get', [AccommodationController::class, 'getById']);
Route::get('accommodation/get/{id}', [AccommodationController::class, 'getByLandlordId']);
Route::get('bookings/get', [BookingController::class, 'getByLandlordId']);
Route::get('landlord/get', [LandlordController::class, 'getById']);
Route::get('landlord/accommodation/get', [LandlordController::class, 'getByAccommodationId']);
