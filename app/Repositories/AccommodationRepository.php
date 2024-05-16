<?php

namespace App\Repositories;

use App\Models\Accommodation;
use Illuminate\Database\Eloquent\Collection;

final class AccommodationRepository
{
    public function getAllNoBooked(): Collection
    {
        return Accommodation::with('characteristic')->where('status', '=', false)->get();
    }

    public function getByLandlordId(int $landlordId): Accommodation
    {
        return Accommodation::find($landlordId);
    }

    public function getById(int $id): ?Accommodation
    {
        $result = Accommodation::find($id);

        return $result ? $result : null;
    }

}
