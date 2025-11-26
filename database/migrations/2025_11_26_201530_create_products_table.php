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
            $table->id();
            $table->foreignId('subcategory_id')->constrained('subcategories')->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('sku')->unique();
            $table->text('description')->nullable();
            $table->string('barcode')->unique()->nullable();
            $table->string('brand')->nullable();
            $table->string('image_url')->nullable();
            $table->integer('quantity')->default(0);
            $table->decimal('price', 16, 2);
            $table->string('location')->nullable();
            $table->date('date_received')->nullable();
            $table->timestamps();
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
