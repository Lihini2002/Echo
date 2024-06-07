<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use App\Models\User;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('subtitle')->unique();
            $table->string('location')->nullable();
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Category::class);
            $table->string('logo')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};




//             //functions for 
//                 //getting the status 
//                     //but for this we need 
//                     //order details 
//                     //okay lets make a order resource right away.
//                     //do we have 


//     // protected $fillable = [
//     //     'name', 
//     //     'description',
//     //     'price', 
//     //     'category_id',
//     //     'seller_id',
//     //     'slug', 
//     //     'meta_title',
//     //     'meta_description',
//     //     'meta_keywords',
//     //     'price',
//     //     'order_by',
//     //     'status' 
//     //     ];  


//     //make functions in the model to get the status 
//     //figure out how to make the order from this information.
//     //make the slug automatically too 
//     //figure out what are these meta tags?

