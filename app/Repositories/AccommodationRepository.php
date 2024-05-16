<?php

namespace App\Repositories;

use App\Models\Accommodation;
use App\Models\AccommodationCharacteristic;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

final class AccommodationRepository
{
    public function getAll(Request $request): Collection
    {
        $builder = Accommodation::query();

        $builderSearch = $this->search($request, $builder);

        return $builderSearch->get();
    }

    private function search(Request $request, Builder $builder): Builder
    {
        $status = $request->input('booked');

        if (isset($status)) {
            $builder->orWhere(DB::raw('status'), '=', $status);
        }

        return $builder->with('characteristic');
    }

    public function getByLandlordId(string $landlordId): Accommodation
    {
        return Accommodation::find($landlordId);
    }

    public function getById(string $id): ?Accommodation
    {
        $result = Accommodation::find($id);

        return $result ? $result : null;
    }

}
