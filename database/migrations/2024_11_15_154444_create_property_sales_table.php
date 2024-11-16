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
        Schema::create('property_sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('agent_id')->constrained()->onDelete('cascade');
            $table->foreign('agent_id')->references('id')->on('users');
            $table->decimal('commission', 15, 2);
            $table->enum('sale_status', ['in progress', 'completed', ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_sales');
    }
};
