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
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('moderation_id');
            $table->date('rating_date');
            $table->index('resource_id');
            $table->foreign('resource_id')->references('id')->on('resources')->onDelete('cascade');
            $table->index('moderator_id');
            $table->foreign('moderator_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('moderation_status');
            $table->date('moderation_date');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
