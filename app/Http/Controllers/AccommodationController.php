<?php

namespace App\Http\Controllers;

use App\Services\AccommodationService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AccommodationController extends BaseController
{
    public function __construct(private readonly AccommodationService $accommodationService) {}

    public function getAll(Request $request): JsonResponse
    {
        $result = $this->accommodationService->getAll($request);

        if (!$result) {
            return response()->json(['error' => 'Ошибка получения комнат']);
        }

        return response()->json(['accommodations' => $result->toJson()]);
    }

    public function getById(Request $request): JsonResponse
    {
        $result = $this->accommodationService->getById($request);

        if (!$result) {
            return response()->json(['error' => 'Ошибка получения комнаты']);
        }

        return response()->json($result->toJson());
    }

    public function getByLandlordId(string $id): JsonResponse
    {
        $result = $this->accommodationService->getByLandlordId($id);

        if (!$result) {
            return response()->json(['error' => 'Ошибка получения комнаты по идентификатору жилья'])->setEncodingOptions(JSON_UNESCAPED_UNICODE);
        }

        return response()->json($result->toJson());
    }

}
