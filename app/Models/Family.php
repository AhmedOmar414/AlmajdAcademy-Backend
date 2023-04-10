<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $table = 'families';
    protected $fillable = [
        'name',
        'hour_price',
        'whatsapp_number',
        'country_code',
        'currency_id',
    ];

    public function tutors(){
        return $this->belongsToMany(User::class,'family_tutor');
    }
    public function currency(){
        return $this->belongsTo(Currency::class,'currency_id');
    }
}
