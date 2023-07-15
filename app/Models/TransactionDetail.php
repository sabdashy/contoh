<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $table = 'transaction_details';

    // mendeklarasikan kolom yang boleh diisi
    protected $fillable = ['type_id', 'menu_id', 'transaction_id'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
