<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function reservations()
{
    return $this->hasMany(Reservation::class);
}

public function isAdmin()
{
    return $this->role === 'admin';
}


public function isSuperAdmin()
{
    return $this->role === 'super_admin';
}
public function isUser()
{
    return $this->role === 'user';
}
public function user()
{
    return $this->belongsTo(User::class);
}

public function reservationform()
{
    return $this->hasMany(Reservationform::class, 'user_id');
}







}
