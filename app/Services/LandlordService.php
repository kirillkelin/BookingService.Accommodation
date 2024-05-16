<?php

namespace App\Services;

use App\Models\Landlord;
use App\Repositories\LandlordRepository;
use Illuminate\Http\Request;

final class LandlordService
{
    public function __construct(private readonly LandlordRepository $landlordRepository)
    {

    }

    public function getById(Request $request): ?Landlord
    {
        $landlordId = $request->input('landlord_id');

        return $this->landlordRepository->getById($landlordId);
    }

    public function getByAccommodationId(Request $request): ?Landlord
    {
        $accommodationId = $request->input('accommodation_id');

        return $this->landlordRepository->getByAccommodationId($accommodationId);
    }

}
