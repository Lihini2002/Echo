<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Category;
use App\Models\Certifications;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

use App\Models\User;


class Brand extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'name', 
        'description',
        'location', 
        'subtitle',
        'slug', 
        // 'logo_URL',
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

        public function certifications()
        {
            return $this->belongsToMany(Certifications::class);
        
        }

        public function registerMediaCollections(): void
        {
        // Add a single file media collection for the featured image
        $this->addMediaCollection('featured_image')
            ->singleFile();

        // Add a multiple file media collection for the gallery
        $this->addMediaCollection('gallery');
        }
    
    //     public function certifications()
    //      {
    //     return $this->belongsToMany(Certification::class, 'brand_certification', 'brand_id', 'certification_id');
    // }

    
        // /**
        //  * Get all of the comments for the Brand
        //  *
        //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
        //  */
        public function products(): HasMany
        {
            return $this->hasMany(Product::class, 'brand_id', 'id');
        }
      
     
}
