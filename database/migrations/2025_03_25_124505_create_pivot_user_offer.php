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
        Schema::create('user_offer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('offer_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_offer', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['offer_id']);
            $table->dropColumn('user_id');
            $table->dropColumn('offer_id');
            $table->dropColumn('id');
        });
    }
};
