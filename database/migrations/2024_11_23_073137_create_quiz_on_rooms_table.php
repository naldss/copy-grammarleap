<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Console\Question\Question;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quiz_on_rooms', function (Blueprint $table) {
            // Define quiz_id as the primary key, no foreign key
            $table->unsignedBigInteger('quiz_id')->primary(); // Primary key for each quiz in the room

            // Foreign key for room_id, referencing 'rooms' table's room_id
            $table->unsignedBigInteger('room_id'); // Define room_id as unsignedBigInteger
            $table->foreign('room_id') // Foreign key referencing the 'rooms' table
                ->references('room_id') // Assuming 'room_id' is the primary key of 'rooms' table
                ->on('rooms') // The table that holds the rooms
                ->onDelete('cascade'); // Automatically delete associated quizzes when a room is deleted

            // Quiz question and choices
            $table->text('question'); // The quiz question
            $table->string('choice1'); // Option 1
            $table->string('choice2'); // Option 2
            $table->string('choice3')->nullable(); // Option 3 (nullable)
            $table->string('choice4')->nullable(); // Option 4 (nullable)
            $table->string('answer'); // Correct answer

            $table->timestamps(); // Adds created_at and updated_at columns
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_on_rooms');
    }
};
