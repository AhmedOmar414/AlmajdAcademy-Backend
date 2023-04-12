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

    //user types const
    CONST ADMIN = 0;
    CONST TUTOR = 1;

    protected $fillable = [
        'name',
        'email',
        'password',
        'user_type_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function families(){
        return $this->belongsToMany(Family::class,'family_tutor');
    }

    public function billings(){
        return $this->hasMany(Billing::class,'tutor_id');
    }
}
