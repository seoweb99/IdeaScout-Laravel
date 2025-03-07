<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Fields that can be mass-assigned
    protected $fillable = ['name'];

    // Relationship: A category has many products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}