<?php

namespace App\Repositories;

use App\Models\Landlord;

final class LandlordRepository
{
    public function getById(int $id): ?Landlord
    {
        $result = Landlord::find($id);

        return $result ? $result : null;
    }

    public function getByAccommodationId(int $id): ?Landlord
    {
        $result = Landlord::get()->where('accommodation_id', '=', $id)->last();

        return $result ? $result : null;
    }

}
