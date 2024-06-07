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
        Schema::create('brand_certifications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('certifications_id');

            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('certifications_id')->references('id')->on('certifications')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_certifications');
    }
};
