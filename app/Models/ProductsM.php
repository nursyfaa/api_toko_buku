<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ProductsM extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'nama_produk', 'harga_produk'
    ];
}
