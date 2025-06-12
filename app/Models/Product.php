<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name', 
        'category_id',
        'product_image',
        'price',
        'stock'
    ];
  
    protected $primaryKey = 'product_id';
    protected $table = 'products';
    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
    public function carts()
    {
        return $this->hasOne(Cart::class, 'product_id', 'product_id');
    }
    public function transactions()
    {
        return $this->hasManyThrough(Transaction::class, TransactionDetail::class);
    }
}
