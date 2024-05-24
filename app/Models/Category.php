<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(
            Product::class,
            'category_id'
            
        );
    }


     
        //  * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
        //  */
        public function brands(): BelongsToMany
        {
            return $this->belongsToMany(Brand::class, 'create_brand_category_table', 'brand_id', 'category_id');
        }
    
        

    public function children()
    {
    return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent()
    {
    return $this->belongsTo(Category::class, 'parent_id');
    }


    public static function getTopLevelCategories()
    {
        return self::whereNull('parent_id')->get();
    }

}
