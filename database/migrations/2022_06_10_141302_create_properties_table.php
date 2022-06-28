<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('type')->nullable();
            $table->string('agreement')->nullable();
            $table->integer('price')->nullable();
            $table->string('payment_duration')->nullable();
            $table->string('location')->nullable();
            $table->integer('area')->nullable();
            $table->string('status')->nullable();
            $table->integer('rooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('floor')->nullable();
            $table->integer('parking')->nullable();
            $table->integer('balcony')->nullable();
            $table->integer('air_conditioning')->nullable();
            $table->integer('alarm_system')->nullable();
            $table->integer('elevator')->nullable();
            $table->integer('garden')->nullable();
            $table->integer('barbeque')->nullable();
            $table->integer('furniture')->nullable();
            $table->integer('cable_tv')->nullable();
            $table->integer('internet')->nullable();
            $table->integer('central_heating')->nullable();
            $table->integer('pet_friendly')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('second_image')->nullable();
            $table->string('third_image')->nullable();
            $table->string('fourth_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
