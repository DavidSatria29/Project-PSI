<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'user_id',
        'name',
        'type',
        'price',
        'stock',
        'image',
        
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



