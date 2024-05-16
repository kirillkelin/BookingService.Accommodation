<?php

namespace App\Services;

use App\Models\Accommodation;
use App\Repositories\AccommodationRepository;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BookingService
{
    public function __construct(private readonly AccommodationRepository $accommodationRepository)
    {
    }

    public function getBookingsByLandlordId(Request $request): string
    {
        $landlordId = $request->input('landlord_id');
        $accommodationId = $this->getAccommodationByLandlord($landlordId)->id;

        $client = new Client(['base_uri' => 'http://booking-service.loc']);
        $response = $client->get('api/bookings/get', [
            'query' => ['accommodation_id' => $accommodationId],
        ]);

        return $response->getBody();
    }

    private function getAccommodationByLandlord(string $id): Accommodation
    {
        return $this->accommodationRepository->getByLandlordId($id);
    }

}
