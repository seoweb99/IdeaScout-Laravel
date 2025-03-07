<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Fields that can be mass-assigned
    protected $fillable = [
        'user_id',
        'product_name',
        'category_id',
        'supplier_name',
        'retail_price',
        'supplier_price_rmb',
        'supplier_price_usd',
        'moq',
        'delivery_time',
        'contact_info',
        'additional_notes',
    ];

    // Relationship: A product belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relationship: A product belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship: A product has many images
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    // Get only product images
    public function productImages()
    {
        return $this->images()->where('image_type', 'product');
    }

    // Get only business card images
    public function businessCardImages()
    {
        return $this->images()->where('image_type', 'business_card');
    }
}