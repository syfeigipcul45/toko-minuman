<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'nama_barang',
        'quantity',
        'satuan_id',
        'harga_product',
        'harga_jual',
        'is_status'
    ];
}
