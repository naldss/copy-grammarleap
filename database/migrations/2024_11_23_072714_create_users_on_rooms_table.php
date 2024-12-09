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
        Schema::create('users_on_rooms', function (Blueprint $table) {
            $table->id('users_on_room_id');
            $table->unsignedBigInteger('room_id'); // Match the type of room_id in the 'rooms' table
            $table->unsignedBigInteger('user_id'); // Match the type of id in the 'users' table

            $table->foreign('room_id')->references('room_id')->on('rooms')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_on_rooms');
    }
};
