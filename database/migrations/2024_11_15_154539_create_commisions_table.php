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
        Schema::create('commisions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_sales_id')->constrained()->onDelete('cascade');
            $table->decimal('commission_amount', 15, 2);
            $table->unsignedBigInteger('agent_id')->constrained()->onDelete('cascade');
            $table->foreign('agent_id')->references('id')->on('users');
            $table->timestamps();
            $table->enum('status', ['pending', 'paid']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commisions');
    }
};
