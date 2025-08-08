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
        Schema::create('time_tables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Class_ID')->references('id')->on('classes');
            $table->foreignId('Subject_ID')->references('id')->on('subjects');
            $table->foreignId('Teacher_ID')->references('id')->on('teachers');
            $table->date('Day_Date');
            $table->time('Start_Time');
            $table->time('End_Time');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('time_tables');
    }
};
