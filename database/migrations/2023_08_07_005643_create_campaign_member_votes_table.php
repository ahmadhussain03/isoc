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
        Schema::create('campaign_member_votes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('campaign_member_id')->constrained()->onDelete('CASCADE');
            $table->foreignId('user_id')->constrained()->onDelete('CASCADE');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('campaign_member_votes', function (Blueprint $table) {
            $table->dropForeign(['campaign_member_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('campaigm_member_votes');
    }
};
