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
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('barcode');
            $table->string('name');
            $table->integer('price');
            $table->integer('discount_percent');
            $table->date('discount_from_date');
            $table->date('discount_to_date');
            $table->string('featured_image');
            $table->integer('inventory_qty');
            $table->date('created_date');
            $table->string('description');
            $table->float('star')->nullable();
            $table->tinyInteger('featured')->nullable();
            
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
