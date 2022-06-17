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
            $table->string('title');
            $table->string('description');
            $table->string('type');
            $table->string('agreement');
            $table->integer('price');
            $table->string('payment_duration');
            $table->string('location');
            $table->integer('area');
            $table->string('status');
            $table->integer('rooms');
            $table->integer('bathrooms');
            $table->integer('bedrooms');
            $table->integer('floor');
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
