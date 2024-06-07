<?php

namespace App\Models;
use App\Models\Pivot\CartProduct;

//Also import the cart-product component 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'item_count',
        'sub_total',
        'total_discount',
        'total',
        'total_tax',
        'is_paid',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this
            ->belongsToMany(Product::class)
            ->using(CartProduct::class)

            //with additional attributes derived from the cardProduct class. 
            ->withPivot([
                'quantity',
                'tax',
                'discount',
                'price',
            ]);
    }


}
