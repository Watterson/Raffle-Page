<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInterfaceComponent extends Model
{
    use HasFactory;

    protected $fillable = [
        '_fk_page',
        'name',
        'description',
    ];

    public function page()
    {
        return $this->hasOne('App\Models\UserInterfacePage', '_fk_page');
    }
}
