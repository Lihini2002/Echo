<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Brand;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Certifications extends Model implements HasMedia
{
     use InteractsWithMedia;

    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'subtitle',
       
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('featured_image')
            ->singleFile();

        $this->addMediaCollection('gallery');
}


    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    
    }


}

