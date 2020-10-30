<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'ticket_total',
        'ticket_price',
        '_fk_question',
        '_fk_prize',
        '_fk_winner',
        '_fk_draw',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    public function question()
    {
        return $this->hasOne('App\Models\Question', '_fk_question');
    }

    public function prize()
    {
        return $this->hasOne('App\Models\Prize', '_fk_prize');
    }

    public function winner()
    {
        return $this->hasOne('App\Models\Winner', '_fk_winner');
    }

    public function draw()
    {
        return $this->hasOne('App\Models\Draw', '_fk_draw');
    }
}
