<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // In the create_categories_table.php file:
    public function up()
    {
    Schema::create('categories', function (Blueprint $table) {
        $table->id();  // This creates an auto-incrementing primary key
        $table->string('name');  // This creates a VARCHAR column
    });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
