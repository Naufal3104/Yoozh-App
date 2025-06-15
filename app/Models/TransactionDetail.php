<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;
use App\Models\Product;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_id',
        'product_id',
        'qty',
        'subtotal',
    ];

    protected $primaryKey = 'detail_id';
    protected $table = 'transaction_details';

    public function transactions()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'transaction_id');
    }

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
}
