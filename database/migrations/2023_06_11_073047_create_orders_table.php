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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('category_id');
            $table->integer('qty');
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('total_price');
            $table->string('estimate_time')->nullable();
            $table->enum('payment_status', ['paid','unpaid'])->default('unpaid');
            $table->enum('status', ['packing','distribute','done'])->default('packing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
