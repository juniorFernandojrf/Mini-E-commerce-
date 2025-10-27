<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'slug',
        'stock',
        'user_id',
        'category_id',
    ];

    /**
     * Um produto pertence a uma categoria.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Um produto pode ter várias imagens (relação polimórfica).
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    /**
     * Um produto pode estar presente em vários itens de pedido.
     */
    // public function orderItems()
    // {
    //     return $this->hasMany(OrderItem::class);
    // }
}
