<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Product;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'qty'
    ];

    protected $primaryKey = 'cart_id';
    protected $table = 'carts';
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
}
