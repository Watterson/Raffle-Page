<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $fillable = [
        '_fk_user',
        '_fk_competition',
        '_fk_payment'
    ];

    public function user()
    {
        return $this->hasOne('App\Models\User', '_fk_user');
    }

    public function competition()
    {
        return $this->hasOne('App\Models\Competition', '_fk_competition');
    }

    public function payment()
    {
        return $this->belongsTo('App\Models\Payment', '_fk_payment');
    }
}
