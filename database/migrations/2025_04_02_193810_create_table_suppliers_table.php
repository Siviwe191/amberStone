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
        if (!Schema::hasTable('suppliers')) {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('business_name'); 
            $table->string('address'); 
            $table->string('country'); 
            $table->string('vat_number')->nullable(); 
            $table->string('logistics_name'); 
            $table->string('logistics_email')->unique(); 
            $table->string('logistics_contact'); 
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
