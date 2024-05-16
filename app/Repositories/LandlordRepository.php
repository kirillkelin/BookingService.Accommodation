<?php

namespace App\Repositories;

use App\Models\Landlord;

final class LandlordRepository
{
    public function getById(string $id): ?Landlord
    {
        try {
            $result = Landlord::find($id);
        } catch (\Exception $exception) {
            return null;
        }

        return $result;
    }

    public function getByAccommodationId(string $id): ?Landlord
    {
        $result = Landlord::get()->where('accommodation_id', '=', $id)->last();

        return $result ? $result : null;
    }

}
