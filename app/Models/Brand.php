<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;


class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'description',
        'location', 
        'subtitle',
        'slug', 
        'logo_URL',
        'category_id',
        'user_id'
        
        
        // 'sustainbility_certifications', 
        //no need of product mention here 


    
        
        ];

         /**
         * Get the user associated with the Brand
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasOne
         */
        public function user(): HasOne
        {
            return $this->hasOne(User::class ,  'id', 'user_id');
            //id is the primary key of the the users and user_id is the foreign key of the brands
        }

        public function categories()
        {
         return $this->belongsToMany(Category::class);
        }

    
        /**
         * Get all of the comments for the Brand
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function products(): HasMany
        {
            return $this->hasMany(Product::class, 'brand_id', 'id');
        }
      
        //counts the number of products associated with the brand.
        // public function productsCount()
        // {
        //     return $this->products()->count();
        // }


     



    //what attributes does the brand have 
    //and the relationships that it has 
        //has one to one relationship with a user that it has one userid 
        //has many products 
        //also we need a seperate model for stocks. 
        //need one to many relationship with products 

}
