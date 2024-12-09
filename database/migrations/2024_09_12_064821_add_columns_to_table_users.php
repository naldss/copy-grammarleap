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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('literacy_level');
            $table->integer('CS_total_quiz_score');
            $table->integer('SB_total');
            $table->integer('PosH_total');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('literacy_level');
            $table->dropColumn('CS_total_quiz_score');
            $table->dropColumn('SB_total');
            $table->dropColumn('PosH_total');
        });
    }
};
