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
        Schema::create('stores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
                $table->id();
                $table->string('name');
                $table->unsignedBigInteger('role_id')->default(3);
                $table->string('address');
                $table->string('city');
                $table->string('state');
                $table->string('country');
                $table->string('phone')->nullable();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
