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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blogTitle');
            $table->string('blogTitleSlug');
            $table->longText('blogDescription');
            $table->string('blogMetaTitle')->nullable();
            $table->longText('blogMetaDescription')->nullable();
            $table->string('blogTag')->nullable();
            $table->integer('serviceCategory');
            $table->string('blogThumbnail')->nullable();
            $table->string('blogStatus')->nullable();
            $table->string('blogComment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
