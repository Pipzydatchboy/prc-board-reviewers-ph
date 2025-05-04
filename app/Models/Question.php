<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // Allow mass-assignment on these columns
    protected $fillable = [
        'subject_id',
        'part',
        'question',
        'choices',
        'answer',
        'explanation',
    ];

    // Cast the 'choices' JSON string to an array automatically
    protected $casts = [
        'choices' => 'array',
    ];
}
