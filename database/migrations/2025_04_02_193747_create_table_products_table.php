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
        if (!Schema::hasTable('products')) {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
                $table->string('product_code')->unique(); 
                $table->text('description');
                $table->decimal('price_2023', 10, 2)->nullable(); 
                $table->decimal('price_2024', 10, 2)->nullable(); 
                $table->decimal('price_2025', 10, 2)->nullable(); 
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
