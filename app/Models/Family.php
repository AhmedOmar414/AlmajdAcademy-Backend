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
        'currency',
    ];

    public function tutors(){
        return $this->belongsToMany(User::class,'family_tutor');
    }
}
