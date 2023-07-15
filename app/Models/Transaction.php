<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // menghubungkan model dengam tabel pasiens
    protected $table = 'transactions';

    // mendeklarasikan kolom yang boleh diisi
    protected $fillable = ['total_price', 'transaction_time', 'user_id', 'menu_id', 'quantity'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function transactionDetail()
    {
        return $this->hasMany(TransactionDetail::class);
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
