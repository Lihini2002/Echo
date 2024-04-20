<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
        'name', 
        'slug', 
        'meta_title',
        'meta_description',
        'meta_keywords',
        'price',
        'order_by',
        'status' 
        ];
    //add an additional image field into this. 

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('featured_image')
            ->singleFile();

        $this->addMediaCollection('gallery');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('250x250')
        ->width(250)
        ->height(250);

        $this->addMediaConversion('500x500')
         ->width(500)
        ->height(500);
       
     }





}









//Things to do ;
    //figure out what it is that you want to do 
    //Actually add actual products to the table and make them show on the user page
            //Okay so for this we could make the table first  
            //Ui first 
            //Then routing 
    //Make the links for the admin to work for them to edit whatever the products 
    //The focus is under products
    //Somehow develop the part of the database diagram under products.
    //Work with laravel media library and add this part under it. 
    //ALl you have to do. 

//Figure out what exactly you are going to do for the mobile app development 
    //Develop a new applocation?
    //