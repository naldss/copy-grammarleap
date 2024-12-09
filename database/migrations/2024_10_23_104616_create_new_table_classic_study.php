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
        Schema::create('classic_study', function (Blueprint $table) {
            $table->id();
            $table->string('topic_level');
            $table->integer('sequence_num');
            $table->string('topic_title');
            $table->text('definition');
            $table->text('image_description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_table_classic_study');
    }
};
