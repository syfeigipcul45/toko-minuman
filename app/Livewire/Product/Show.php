<?php

namespace App\Livewire\Product;

use App\Models\Barang;
use App\Models\ProductDetail;
use App\Models\Satuan;
use Livewire\Component;

class Show extends Component
{
    public $details;
    public $barangs;
    public $satuans;
    public $product;

    public function render()
    {
        return view('livewire.product.show');
    }

    public function mount($product_id)
    {
        $details = ProductDetail::where('product_id', $product_id)->get();
        $this->details = $details;
    }

    public function namaBarang($barangID)
    {
        $nama_barang = Barang::find($barangID);
        return $nama_barang;
    }

    public function satuan($satuanID)
    {
        $satuan = Satuan::find($satuanID);
        return $satuan;
    }
}
