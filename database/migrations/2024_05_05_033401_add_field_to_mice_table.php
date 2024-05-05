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
        Schema::table('mice', function (Blueprint $table) {
            $table->string('name')->required()->after('id');
            $table->date('dob')->required()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mice', function (Blueprint $table) {
            $table->dropColumn(['name', 'dob']);
        });
    }
};
