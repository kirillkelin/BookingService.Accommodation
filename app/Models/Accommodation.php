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
        'id',
        'description',
        'price',
        'status',
        'characteristics_id',
        'tenant_id',
    ];

    public function characteristic()
    {
        return $this->BelongsTo(AccommodationCharacteristic::class, 'characteristics_id');
    }

    public function getKeyType()
    {
        return 'string';
    }
}
