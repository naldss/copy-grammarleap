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
        Schema::table('pos_hunter_table', function (Blueprint $table) {
            $table->text('sentence')->change();
        });
    }

    public function down(): void
    {
        Schema::table('pos_hunter_table', function (Blueprint $table) {
            $table->string('sentence', 255)->change();
        });
    }
};
