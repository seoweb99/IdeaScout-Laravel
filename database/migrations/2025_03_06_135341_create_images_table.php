<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('product_id')
                ->constrained('products')
                ->onDelete('cascade'); // Foreign key referencing products table
            $table->text('image_path'); // Store image file path
            $table->enum('image_type', ['product', 'business_card']); // Restrict values
            $table->integer('image_order'); // Order of images
            $table->timestamps(); // Adds created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
