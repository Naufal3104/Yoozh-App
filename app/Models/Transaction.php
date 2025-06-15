<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'date',
        'total',
        'pay_total'
    ];

    protected $primaryKey = 'transaction_id';
    protected $table = 'transactions';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function transaction_details()
    {
        return $this->hasMany(TransactionDetail::class, 'transaction_id', 'transaction_id');
    }
}
