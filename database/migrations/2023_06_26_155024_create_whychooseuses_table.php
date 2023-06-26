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
        Schema::create('whychooseuses', function (Blueprint $table) {
            $table->id();
            $table->string('team_heading_line');
            $table->longText('about_team');
            $table->string('meta_team_heading_line')->nullable();
            $table->longText('meta_about_team')->nullable();
            $table->string('about_main_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whychooseuses');
    }
};
