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
        Schema::create('purchase_orders', function (Blueprint $table) {
            if (!Schema::hasTable('purchase_orders')) {
                Schema::create('purchase_orders', function (Blueprint $table) {
                    $table->id();
                    $table->string('order_number')->unique(); 
                    $table->enum('order_type', ['POS', 'POD']); 
                    $table->unsignedBigInteger('supplier_id')->nullable();
                    $table->unsignedBigInteger('distributor_id')->nullable();
                    $table->timestamps();
    
                    // Foreign keys
                    $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('set null');
                    $table->foreign('distributor_id')->references('id')->on('distributors')->onDelete('set null');
                });
    
                Schema::create('purchase_order_items', function (Blueprint $table) {
                    $table->id();
                    $table->unsignedBigInteger('purchase_order_id');
                    $table->string('product_code'); 
                    $table->decimal('quantity', 10, 2); 
                    $table->date('delivery_date'); 
                    $table->decimal('total_value', 15, 2); 
                    $table->enum('status', [
                        'New',
                        'Accepted by Supplier',
                        'In Delivery',
                        'Delivered',
                        'Rejected by Supplier',
                        'Rejected by Distributor',
                        'Cancelled'
                    ])->default('New');
    
                    $table->timestamps();
    
                    // Foreign key
                    $table->foreign('product_code')->references('product_code')->on('products')->onDelete('cascade');
                    $table->foreign('purchase_order_id')->references('id')->on('purchase_orders')->onDelete('cascade');
                });
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_orders');
    }
};
