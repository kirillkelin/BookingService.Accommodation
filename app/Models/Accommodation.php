<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Accommodation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'description',
        'price',
        'status',
        'characteristics_id',
        'tenant_id',
    ];

    public function characteristics(): HasOne
    {
        return $this->hasOne(AccommodationCharacteristic::class);
    }

}
