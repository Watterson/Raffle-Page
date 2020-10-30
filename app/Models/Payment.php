<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_code',
        'total',
        '_fk_refund',
    ];

    public function entry()
    {
        return $this->hasMany('App\Models\Entry', );
    }

    public function refund()
    {
        return $this->hasOne('App\Models\Refund', '_fk_refund');
    }
}
