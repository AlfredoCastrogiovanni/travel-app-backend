<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    protected $fillable = [
        'day_id',
        'description',
        'title'
    ];

    public function day() {
        return $this->belongsTo(Day::class);
    }
}
