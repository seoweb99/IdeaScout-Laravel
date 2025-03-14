<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phrase extends Model
{
    use HasFactory;

    // Fields that can be mass-assigned
    protected $fillable = [
        'phrase_en',
        'phrase_zh',
    ];
}