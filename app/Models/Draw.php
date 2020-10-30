<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draw extends Model
{
    use HasFactory;

    protected $fillable = [
        'link',
        'start_time',
        'total_viewers',
    ];

    protected $casts = [
        'start_time' => 'datetime',
    ];
}
