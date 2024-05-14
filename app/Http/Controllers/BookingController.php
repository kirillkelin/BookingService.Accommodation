<?php

namespace App\Http\Controllers;

use App\Services\BookingService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BookingController extends BaseController
{
    public function __construct(private readonly BookingService $bookingService) {}

    public function getByLandlordId(Request $request): JsonResponse
    {
        $result = $this->bookingService->getBookingsByLandlordId($request);

        if (!$result) {
            return response()->json(['error' => 'Ошибка получения комнат.'])->setEncodingOptions(JSON_UNESCAPED_UNICODE);
        }

        $result = stripslashes($result);
        return response()->json($result)->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }

}
