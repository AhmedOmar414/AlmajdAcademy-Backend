<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = [
        'tutor_id',
        'name',
        'family_id',
        'hour_price',
    ];

    public function family(){
        return $this->belongsTo(Family::class);
    }

    public function lectures(): HasMany
    {
        return $this->hasMany(Lecture::class);
    }
}
