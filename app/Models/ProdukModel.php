<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = [
        'nm_produk', 'satuan', 'harga', 'stock'
    ];
}