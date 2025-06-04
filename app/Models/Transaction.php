<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'date',
        'total',
        'pay_total'
    ];

    protected $table = 'transactions';

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function transaction_details()
    {
        return $this->hasMany(TransactionDetail::class, 'transaction_id');
    }
}
