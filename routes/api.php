<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('bookings/get', [BookingController::class, 'getByLandlordId']);
