<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    // Allow mass-assignment on the 'name' column
    protected $fillable = ['name'];
}
