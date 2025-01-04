<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPropertyTable extends Migration
{
    public function up()
    {
        Schema::create('detail_property', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained()->onDelete('cascade'); 
            $table->decimal('land_area', 10, 2);
            $table->decimal('building_area', 10, 2);
            $table->integer('electricity_power');
            $table->integer('number_of_floors'); 
            $table->integer('bedrooms');
            $table->integer('bathrooms'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_property');
    }
}