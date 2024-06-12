<?php

namespace App\Livewire\Product;

use App\Models\Product;
use App\Models\ProductDetail as ModelsProductDetail;
use Livewire\Component;

class ProductDetail extends Component
{
    public $productDetailID;
    public $barang_id;
    public $quantity;
    public $satuan_id;
    public $harga_product;
    public $keuntungan;
    public $is_status;
    public $barangs;
    public $satuans;

    public function render()
    {
        return view('livewire.product.product-detail');
    }

    public function mount($id)
    {
        $detail = ModelsProductDetail::find($id);
        // dd($detail);
        $this->productDetailID = $detail->id;
        $this->barang_id = $detail->barang_id;
        $this->quantity = $detail->quantity;
        $this->satuan_id = $detail->satuan_id;
        $this->harga_product = $detail->harga_product;
        $this->is_status = $detail->is_status;
    }

    public function update()
    {
        $productDetail = ModelsProductDetail::find($this->productDetailID);
        // dd($this->is_status);

        $productDetail->update([
            'barang_id' => $this->barang_id,
            'quantity'  => $this->quantity,
            'satuan_id' => $this->satuan_id,
            'harga_product' => $this->harga_product,
            'is_status' => $this->is_status
        ]);

        session()->flash('success', 'Data berhasil diupdate');
        return redirect()->route('product.edit', $productDetail->product_id);
    }
}
