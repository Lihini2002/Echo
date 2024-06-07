<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Product;
use App\Models\Certifications;

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

    public function products()
    {
        return $this->belongsToMany(Product::class);
    
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
