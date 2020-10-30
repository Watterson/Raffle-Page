<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_code',
    ];

    public function payment()
    {
        return $this->hasOne('App\Models\Payment');
    }
}
