<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    //Атрибуты, которые можно массово назначать.
    protected $fillable = [
        'id',
        'order_id',
        'product_id',
    ];

    //Получить заказ, связанный с корзиной.
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    //Получить продукт, связанный с корзиной.
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }


}
