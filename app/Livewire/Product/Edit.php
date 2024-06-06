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
    public $productDetailID;
    public Collection $details;
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

    public function render()
    {
        return view('livewire.product.edit');
    }

    public function mount($product_id)
    {
        $this->details = collect();
        $product = Product::find($product_id);
        $this->tanggal_beli = $product->tanggal_beli;
        $this->nama_toko = $product->nama_toko;
        $details = ProductDetail::where('product_id', $product_id)->get();
        $this->details = $details;
    }

    public function addInputs()
    {
        $this->inputs->push([
            'barang_id' => null,
            'quantity' => null,
            'satuan_id' => null,
            'harga_product' => null,
            'keuntungan'    => null,
        ]);
    }

    public function removeInputs($index)
    {
        $this->inputs->pull($index);
    }

    private function resetInputFields()
    {
        $this->barang_id = '';
        $this->quantity = '';
        $this->satuan_id = '';
        $this->harga_product = '';
        $this->keuntungan = '';
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

    public function update()
    {
        $detail = ProductDetail::find($this->productDetailID);

        foreach ($this->inputs as $input) {
            $detail->update([
                'barang_id'   => $input['barang_id'],
                'product_id'    => $input['product_id'],
                'quantity'      => $input['quantity'],
                'satuan_id'     => $input['satuan_id'],
                'harga_product' => $input['harga_product'],
                'keuntungan'    => (($input['quantity'] * $this->satuan($input['satuan_id'])->jumlah) * $this->namaBarang($input)->harga_jual) - $input['harga_product'],
            ]);
        }

        $this->resetInputFields();
        session()->flash('success', 'Data berhasil diupdate');
        return redirect()->route('product.index');
    }
}
