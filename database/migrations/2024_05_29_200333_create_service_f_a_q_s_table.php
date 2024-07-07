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
        Schema::create('service_f_a_q_s', function (Blueprint $table) {
            $table->id();
            $table->integer('serviceID');
            $table->string('faqQuestion')->nullable();
            $table->mediumText('faqAnswer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_f_a_q_s');
    }
};
