<?php

namespace App\Models;

use App\Models\Product;
use App\Models\productColor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Orderitem extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    protected $fillable = [
        'order_id',
        'product_id',
        'product_color_id',
        'quantity',
        'price'
    ];

     /**
     * Get all of the orderItems for the Order
     * 
     * @return \Illuminate\Database\Eloquent\Relation\HasMany
     */
    public function Product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    /**
     * Get all of the orderItems for the Order
     * 
     * @return \Illuminate\Database\Eloquent\Relation\HasMany
     */
    public function productColor(): BelongsTo
    {
        return $this->belongsTo(productColor::class, 'product_color_id', 'id');
    }
}
