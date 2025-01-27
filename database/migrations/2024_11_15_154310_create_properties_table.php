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
            $table->string('property_owner_name', 100)->nullable();
            $table->string('property_owner_number_phone', 15)->nullable();
            $table->string('title', 100)->nullable();
            $table->foreignId('category_id')->constrained('property_categories')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 15, 2);
            $table->string('location', 255);
            $table->enum('status', ['not verified', 'verified', 'sold'])->nullable();
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
