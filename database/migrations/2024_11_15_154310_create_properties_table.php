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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_owner_name', 100);
            $table->string('property_owner_number_phone', 15);
            $table->string('title', 100);
            $table->string('category_id');
            $table->text('description');
            $table->decimal('price', 15, 2);
            $table->string('location', 255);
            $table->enum('status', ['not verified', 'verified', 'sold']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
