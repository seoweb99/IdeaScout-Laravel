<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // Fields that can be mass-assigned
    protected $fillable = [
        'product_id',
        'image_path',
        'image_type',
        'image_order',
    ];

    // Relationship: An image belongs to a product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Get the full URL for the image
    public function getUrlAttribute()
    {
        return asset('storage/' . $this->image_path);
    }
}