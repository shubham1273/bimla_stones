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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('media')->nullable();
            $table->string('media_type')->nullable();
            $table->string('page_key'); // Required field
            $table->string('media_2')->nullable();
            $table->string('media_3')->nullable();
            $table->string('media_4')->nullable();
            $table->string('media_5')->nullable();
            $table->string('media_6')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
