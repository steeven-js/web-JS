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
        Schema::create('newbies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->boolean('is_visible')->default(false);
            $table->string('view_code')->nullable();
            $table->integer('position')->nullable();
            $table->string('image')->nullable();
            $table->string('hosted_url')->nullable();
            $table->boolean('hosted_is_active')->default(false);
            $table->string('github_url')->nullable();
            $table->boolean('github_is_active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newbies');
    }
};
