<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservationform extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id',
    'table_id',
    'first_name',
    'last_name',
    'email',
    'phone',
    // 'guest_number',
    'res_date',
    'res_time',
    'message',
    'status',
    'upcoming_reservation'
];
public function user()
{
    return $this->belongsTo(User::class);
}

public function table()
{
    return $this->belongsTo(Table::class);
}





}
