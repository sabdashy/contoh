<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    // menghubungkan model dengam tabel pasiens
    protected $table = 'carts';

    // mendeklarasikan kolom yang boleh diisi
    protected $fillable = ['quantity', 'subtotal', 'user_id', 'type_id', 'menu_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
