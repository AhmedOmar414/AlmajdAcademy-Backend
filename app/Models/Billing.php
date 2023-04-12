<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;
    protected $fillable = [
        'family_id',
        'tutor_id',
        'currency_id',
        'hour_rate',
        'lecture_duration',
        'month',
        'year',
        'is_paid',
        'amount',
        'lecture_id',
    ];
    public function family(){
        return $this->belongsTo(Family::class,'family_id');
    }
    public function tutor(){
        return $this->belongsTo(User::class,'tutor_id');
    }
    public function lecture(){
        return $this->belongsTo(Lecture::class,'lecture_id');
    }
    public function currency(){
        return $this->belongsTo(Currency::class);
    }
}
