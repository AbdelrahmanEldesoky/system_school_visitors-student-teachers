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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_father_ar');
            $table->string('name_grandfather_ar');
            $table->string('name_family_ar');
            $table->string('name_en');
            $table->string('name_father_en');
            $table->string('name_grandfather_en');
            $table->string('name_family_en');
            $table->string('gender');
            $table->string('nationality');
            $table->string('lives');
            $table->string('city');
            $table->string('address');
            $table->string('birth_date');
            $table->string('status');
            $table->string('know_about');
            $table->string('explanation');
            $table->string('job_is');
            $table->string('qualification');
            $table->string('specialization');
            $table->string('experience');
            $table->string('mobile')->unique();
            $table->string('email')->unique();
            $table->integer('worked');
            $table->longText('cv');
            $table->integer('status_job')->default(3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
