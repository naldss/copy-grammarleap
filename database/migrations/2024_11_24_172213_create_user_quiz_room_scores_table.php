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
        Schema::create('user_quiz_room_scores', function (Blueprint $table) {
            $table->id('quiz_score_id');
            $table->unsignedBigInteger('room_id'); // Make sure it's unsignedBigInteger
            $table->unsignedBigInteger('user_id'); // Make sure it's unsignedBigInteger
            $table->integer('score'); // The score the user achieved in the quiz
            $table->timestamps();

            // Adding foreign keys
            $table->foreign('room_id')->references('room_id')->on('rooms')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_quiz_room_scores');
    }
};
