<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $fillable = ['table_number', 'seating_capacity', 'is_available'];

    public function reservationform()
    {
        return $this->hasMany(Reservationform::class);
    }
}
