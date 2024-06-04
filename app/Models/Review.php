<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Product;

class Review extends Model
{
    // use SoftDeletes;

    public $fillable = [
        'review',
        'rating',
        'product_id',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public static function getReviews(Product $product)
    {
        //a collection of review objects. 
        
        return Review::where('product_id', $product->id)
            ->with('user')
            ->get();
            // ->paginate(2);
    }
     
    


}
