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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('portfolio_title');
            $table->longText('portfolio_description');
            $table->string('portfolio_meta_title')->nullable();
            $table->longText('portfolio_meta_description')->nullable();
            $table->string('portfolio_url')->nullable();
            $table->string('project_start_from')->nullable();
            $table->string('project_end_to')->nullable();
            $table->integer('portfolio_category_id')->nullable();
            $table->string('portfolio_thumbnail')->nullable();
            $table->string('portfolio_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
