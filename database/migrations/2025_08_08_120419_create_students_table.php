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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('User_ID')->references('id')->on('users');
            $table->string('First_Name');
            $table->string('Middle_Name');
            $table->string('Last_Name');
            $table->string('address');
            $table->string('Phone_Number');
            $table->date('Date_Birth');
            $table->foreignId('Class_ID')->references('id')->on('classes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
