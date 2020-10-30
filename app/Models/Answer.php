<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        '_fk_question',
        'title',
        'correct'
    ];

    public function question()
    {
        return $this->belongsTo('App\Models\Question', '_fk_question');
    }
}
