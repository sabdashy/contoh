<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    // menghubungkan model dengam tabel pasiens
    protected $table = 'types';

    // mendeklarasikan kolom yang boleh diisi
    protected $fillable = ['name'];

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    public function menu()
    {
        return $this->hasMany(Menu::class);
    }
}
