<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'difficulty',
    ];

    public function competition()
    {
        return $this->hasOne('App\Models\Competition');
    }

    public function refund()
    {
        return $this->hasOne('App\Models\Refund');
    }
}
