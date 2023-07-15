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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image1')->default('course_4.jpg');
            $table->string('image2')->default('course_5.jpg');
            $table->string('txt1')->default('Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque dolore libero corrupti! Itaque,
            delectus?');
            $table->string('txt2')->default('Modi sit dolor repellat esse! Sed necessitatibus itaque libero odit placeat nesciunt, voluptatum
            totam facere.');
            $table->string('txt3')->default('Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque dolore libero corrupti! Itaque,
            delectus?');
            $table->string('txt4')->default('Modi sit dolor repellat esse! Sed necessitatibus itaque libero odit placeat nesciunt, voluptatum
            totam facere.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
