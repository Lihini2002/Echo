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
        Schema::create('products', function (Blueprint $table) {
            $table->id();                       
            $table->timestamps();               
            $table->string('name');
            $table->string('brand_id');
            $table->string('slug');
            $table->string('category_id');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('status');
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->string('image')->nullable();


            //added later 
            // $table->longText('meta_keywords')->nullable();
            // $table->integer('stock');

            //changed datatype of stautus to boolean 
            


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
