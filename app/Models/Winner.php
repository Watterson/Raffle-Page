<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    use HasFactory;

    protected $fillable = [
        '_fk_entry',
        'redeemed',
    ];

    public function entry()
    {
        return $this->belongsTo('App\Models\Entry', '_fk_entry');
    }
}
