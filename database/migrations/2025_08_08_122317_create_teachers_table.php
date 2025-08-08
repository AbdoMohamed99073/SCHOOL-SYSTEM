<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('User_ID')->references('id')->on('users');
            $table->string('First_Name');
            $table->string('Middle_Name');
            $table->string('Last_Name');
            $table->string('address');
            $table->string('Phone_Number');
            $table->foreignId('Subject_ID')->references('id')->on('subjects');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
