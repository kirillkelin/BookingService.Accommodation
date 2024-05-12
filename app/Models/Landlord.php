<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'accommodation_id',
        'last_name',
        'first_name',
        'login',
        'email',
        'email',
        'phone',
    ];

}
