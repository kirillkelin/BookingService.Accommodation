<?php

use App\Http\Controllers\AccommodationController;
use Illuminate\Support\Facades\Route;

Route::get('accommodations/get', [AccommodationController::class, 'getAllNoBooked']);
Route::get('accommodation/get', [AccommodationController::class, 'getById']);
Route::get('accommodation/get/{id}', [AccommodationController::class, 'getByLandlordId']);
