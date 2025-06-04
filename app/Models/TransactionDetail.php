<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_transaction',
        'id_product',
        'qty',
        'subtotal',
    ];

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
