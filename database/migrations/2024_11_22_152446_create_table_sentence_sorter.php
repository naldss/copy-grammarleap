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
        Schema::create('sentence_sorter_sentences', function (Blueprint $table) {
            $table->id(); 
            $table->text('sentence'); // Sentence content
            $table->enum('type', ['declarative', 'interrogative', 'imperative', 'exclamatory']); // Sentence type
            $table->tinyInteger('difficulty')->default(1); // Difficulty level (1: easy, 2: medium, 3: hard)
            $table->timestamps(); // Created_at and Updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sentence_sorter_sentences');
    }
};
