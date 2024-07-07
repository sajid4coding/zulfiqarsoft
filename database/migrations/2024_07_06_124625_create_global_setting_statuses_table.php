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
        Schema::create('global_setting_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('subscription_section')->nullable();
            $table->string('testimonial_section')->nullable();
            $table->string('portfolio_section')->nullable();
            $table->string('team_section')->nullable();
            $table->string('blog_section')->nullable();
            $table->string('newsletter_section')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('global_setting_statuses');
    }
};
