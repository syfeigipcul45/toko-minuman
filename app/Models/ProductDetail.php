<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'barang_id',
        'quantity',
        'satuan_id',
        'harga_product',
        'harga_jual',
        'keuntungan',
        'is_status'
    ];

    public function productsCreated()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function barangsCreated()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }

    public function satuansCreated()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id');
    }
}
