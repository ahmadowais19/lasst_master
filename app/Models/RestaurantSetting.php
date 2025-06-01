<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'opening_time',
        'closing_time',
        'max_guests_per_slot',
        'reservation_duration',
        'buffer_time',
    ];
}
