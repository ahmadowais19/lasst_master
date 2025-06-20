<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'table_id',
        'guest_number',
        'reservation_time',
        'status',
    ];

  

}
