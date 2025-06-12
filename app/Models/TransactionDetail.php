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
        return $this->belongsTo(Transaction::class);
    }

    public function products()
    {
        return $this->belongsTo(Item::class);
    }
}
