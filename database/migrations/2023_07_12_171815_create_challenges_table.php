<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('challenges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('challenge_level_id');
            $table->foreign('challenge_level_id')->references('id')->on('challenge_levels');
            $table->integer('position')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('view_code')->nullable();
            $table->string('image')->nullable();
            $table->string('hosted_url')->nullable();
            $table->string('github_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('challenges');
    }
};
