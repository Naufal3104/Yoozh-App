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
}
