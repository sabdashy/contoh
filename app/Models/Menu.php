<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // menghubungkan model dengam tabel pasiens
    protected $table = 'menus';

    // mendeklarasikan kolom yang boleh diisi
    protected $fillable = ['name', 'description', 'price', 'image', 'type_id', 'users_id'];

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
