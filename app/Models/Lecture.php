<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    CONST ATTENDED = 1;
    CONST NOT_ATTENDED = 0;

    protected $table = 'lectures';
    protected $fillable = [
        'course_id',
        'lecture_date',
        'lecture_duration',
        'attended',
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
