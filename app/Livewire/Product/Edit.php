<?php

namespace App\Livewire\Product;

use App\Models\Barang;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Satuan;
use Illuminate\Support\Collection;
use Livewire\Component;

class Edit extends Component
{
    public $selectProductDetailID = 0;
    public Collection $details;
    public $inputs = [];
    public $barangs;
    public $satuans;
    public $product;

    public $nama_toko;
    public $tanggal_beli;

    // public Collection $inputs;

    public $barang_id;
    public $quantity;
    public $satuan_id;
    public $harga_product;
    public $keuntungan;
    public $is_status;
    public $product_id;
    public $productDetail;

    public function render()
    {
        return view('livewire.product.edit');
    }

    public function mount($product_id)
    {
        $this->details = collect();
        $this->inputs = collect();
        $product = Product::find($product_id);
        $this->tanggal_beli = $product->tanggal_beli;
        $this->nama_toko = $product->nama_toko;
        $details = ProductDetail::where('product_id', $product_id)->get();
        $this->details = $details;
        $this->product_id = $product_id;
        $detail = ProductDetail::find($this->selectProductDetailID);
        // if ($detail) {
        // $this->barang_id = $detail->id;
        // }
    }

    // public function addInputs()
    // {
    //     $this->inputs->push([
    //         'barang_id' => null,
    //         'quantity' => null,
    //         'satuan_id' => null,
    //         'harga_product' => null,
    //         'keuntungan'    => null,
    //         'is_status'     => null,
    //     ]);
    // }

    // public function removeInputs($index)
    // {
    //     $this->inputs->pull($index);
    // }

    // private function resetInputFields()
    // {
    //     $this->barang_id = '';
    //     $this->quantity = '';
    //     $this->satuan_id = '';
    //     $this->harga_product = '';
    //     $this->keuntungan = '';
    //     $this->is_status = '';
    // }

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

    public function checkStatus($id)
    {
        $check = ProductDetail::find($id);
        return $check->is_status;
    }

    public function update()
    {
        foreach ($this->details as $detail) {
            dd($detail['is_status']);
            $is_status = ProductDetail::find($detail['id']);
            dd($this->input['is_status']);
            if ($this->input['is_status'] == 1) {
                $is_status->update([
                    'is_status'   => 1,
                ]);
            }
        }

        session()->flash('success', 'Data berhasil diupdate');
        return redirect()->route('product.index');
    }

    public function changeUpdate($selectProductDetailID)
    {
        $this->selectProductDetailID = $selectProductDetailID;
    }

    public function updateProduct()
    {
        if ($this->selectProductDetailID == 0) {
            return;
        }
        dd($this->selectProductDetailID);
        $is_status = ProductDetail::find($this->selectProductDetailID);
        $is_status->update([
            'is_status'   => 1,
        ]);
        $this->selectProductDetailID = 0;
    }
}
