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
        Schema::create('products', function (Blueprint $table) {
            $table->id();  // Creates an auto-incrementing INTEGER PRIMARY KEY
            
            // Foreign key to users table
            $table->foreignId('user_id')
                  ->nullable()
                  ->constrained()
                  ->onDelete('set null');  // If user is deleted, keep product but set user_id to null
            
            $table->string('product_name');  // Non-nullable product name
            
            // Foreign key to categories table
            $table->foreignId('category_id')
                  ->nullable()
                  ->constrained()
                  ->onDelete('set null');  // If category is deleted, keep product but set category_id to null
            
            $table->string('supplier_name')->nullable();
            $table->decimal('retail_price', 10, 2)->nullable();  // Precision of 10 digits with 2 decimal places
            $table->decimal('supplier_price_rmb', 10, 2)->nullable();
            $table->decimal('supplier_price_usd', 10, 2)->nullable();
            $table->integer('moq')->nullable();  // Minimum Order Quantity
            $table->string('delivery_time')->nullable();
            $table->text('contact_info')->nullable();  // For longer text content
            $table->text('additional_notes')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};