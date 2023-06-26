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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('heading_line');
            $table->longText('about');
            $table->string('heading_meta_line')->nullable();
            $table->longText('about_meta_description')->nullable();
            $table->string('about_image_1')->nullable();
            $table->string('about_image_2')->nullable();
            $table->string('about_image_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
