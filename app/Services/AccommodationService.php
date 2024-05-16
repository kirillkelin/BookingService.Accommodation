<?php

namespace App\Services;

use App\Models\Accommodation;
use App\Models\Landlord;
use App\Repositories\AccommodationRepository;
use App\Repositories\LandlordRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

final class AccommodationService
{
    public function __construct(
        private readonly AccommodationRepository $accommodationRepository,
        private readonly LandlordRepository $landlordRepository,
    ) {}

    public function getAllNoBooked(): ?Collection
    {
        return $this->accommodationRepository->getAllNoBooked();
    }

    public function getById(Request $request): ?Accommodation
    {
        $id = $request->input('accommodation_id');

        return $this->accommodationRepository->getById($id);
    }

    public function getByLandlordId(int $id): ?Accommodation
    {
        $landlord = $this->landlordRepository->getById($id);
        $accommodationId = $landlord->accommodation_id;

        return $this->accommodationRepository->getById($accommodationId);
    }

}
