<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'amount',
        'description',
        'image',
        'category_id',
        'user_id',

    ];


    // Mendefinisikan relasi antara produk dan kategori
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Mendefinisikan relasi antara produk dan pengguna
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
