<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInterface extends Model
{
    use HasFactory;

    protected $fillable = [
        '_fk_component',
        'contents',
    ];

    public function component()
    {
        return $this->hasOne('App\Models\UserInterfaceComponent', '_fk_component');
    }
}
