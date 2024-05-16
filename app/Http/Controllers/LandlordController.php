<?php

namespace App\Http\Controllers;

use App\Services\LandlordService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LandlordController extends BaseController
{
    public function __construct(private readonly LandlordService $landlordService)
    {

    }

    public function getById(Request $request): JsonResponse
    {
        $result = $this->landlordService->getById($request);

        if (!$result) {
            return response()->json(['error' => 'Ошибка получения землевладельца.'])->setEncodingOptions(JSON_UNESCAPED_UNICODE);
        }

        return response()->json(['landlord' => $result->toJson()])->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }

    public function getByAccommodationId(Request $request): JsonResponse
    {
        $result = $this->landlordService->getByAccommodationId($request);

        if (!$result) {
            return response()->json(['error' => 'Ошибка получения землевладельца.'])->setEncodingOptions(JSON_UNESCAPED_UNICODE);
        }

        return response()->json($result->toJson());
    }

}
