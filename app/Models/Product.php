<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Product extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    protected $fillable = [
        'name', 
        'description',
        'price', 
        'category_id',
        'brand_id',
        'slug', 
        'meta_title',
        'meta_description',
        'meta_keywords',
        'price',
        'order_by',
        'status' ,
        'stock'
        ];
    //add an additional image field into this. 

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('featured_image')
            ->singleFile();

        $this->addMediaCollection('gallery');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

  
     public function brand(): BelongsTo
     {
         return $this->belongsTo(Brand::class, 'brand_id', 'id');
     }
    
     public function getRouteKeyName()
    {
    return 'slug'; // or the column you're using for the route
    }

    public function carts()
{
    return $this->belongsToMany(Cart::class)->using(CartProduct::class);
}

    // public function registerMediaConversions(Media $media = null): void
    // {
    //     $this->addMediaConversion('250x250')
    //     ->width(250)
    //     ->height(250);

    //     $this->addMediaConversion('500x500')
    //      ->width(500)
    //     ->height(500);
       
    //  }

   




}









