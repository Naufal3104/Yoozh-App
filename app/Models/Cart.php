<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_product',
        'qty'
    ];

    protected $table = 'carts';
    public function products()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }
}
