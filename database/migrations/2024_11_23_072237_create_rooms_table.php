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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('room_id'); // Use unsignedBigInteger for consistency
            $table->unsignedBigInteger('creator_id'); // Explicitly defining as unsignedBigInteger
            $table->string('room_name', 100);
            $table->text('room_description')->nullable();
            $table->string('passcode', 50)->nullable();
            $table->timestamps();

            $table->foreign('creator_id')->references('id')->on('users')->onDelete('cascade'); // Foreign key for creator
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
