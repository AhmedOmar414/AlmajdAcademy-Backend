<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyTutor extends Model
{
    use HasFactory;
    protected $table = 'family_tutor';
    protected $fillable = [
        'user_id',
        'family_id',
    ];
}
