<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccommodationCharacteristic extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'count_rooms',
        'total_area',
        'address',
    ];

    public function accommodations(): BelongsTo
    {
        return $this->belongsTo(Accommodation::class);
    }

    public function getKeyType()
    {
        return 'string';
    }
}
