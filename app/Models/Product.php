<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'id_category',
        'product_image',
        'price',
        'stock'
    ];
    protected $table = 'products';
    public function categories()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
    public function carts()
    {
        return $this->hasOne(Cart::class, 'id_product');
    }
    public function transactions()
    {
        return $this->hasManyThrough(Transaction::class, TransactionDetail::class, 'id_product', 'id_transaction');
    }
}
