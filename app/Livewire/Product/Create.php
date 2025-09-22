<?php

namespace App\Livewire\Product;

use App\Models\Barang;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Satuan;
use Illuminate\Support\Collection;
use Livewire\Component;

class Create extends Component
{
    public $id;
    public $tanggal_beli;
    public $nama_toko;

    public $barang_id;
    public $quantity;
    public $satuan_id;
    public $harga_product;

    public $satuans;
    public $barangs;
    public Collection $inputs;
    public $i = 1;

    public function mount ()
    {
        $this->inputs = collect();
        // dd($this->harga_botol = $this->jumlahSatuan($this->satuan_id));
    }

    public function render()
    {
        return view('livewire.product.create');
    }

    public function jumlahSatuan($id)
    {
        $jumlah = Satuan::find($id);
        return $jumlah->jumlah;
    }

    public function addInputs()
    {
        $this->inputs->push([
            'barang_id' => null,
            'quantity' => null,
            'satuan_id' => null,
            'harga_product' => null,
        ]);
        // $i = $i + 1;
        // $this->i = $i;
        // array_push($this->inputs ,$i);
    }

    public function removeInputs($index)
    {
        // dd($index);
        $this->inputs->pull($index);
    }

    private function resetInputFields()
    {
        $this->barang_id = '';
        $this->quantity = '';
        $this->satuan_id = '';
        $this->harga_product = '';
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

    public function create()
    {
        $this->id = Product::get()->max('id') ?? 0;
        Product::create([
            'id' => ($this->id + 1),
            'tanggal_beli' => $this->tanggal_beli,
            'nama_toko' => $this->nama_toko
        ]);

        // dd($this->inputs);
        foreach ($this->inputs as $input) {
            ProductDetail::create([
                'barang_id'   => $input['barang_id'],
                'product_id'    => ($this->id + 1),
                'quantity'      => $input['quantity'],
                'satuan_id'     => $input['satuan_id'],
                'harga_product' => $input['harga_product'],
                'keuntungan'    => (($input['quantity'] * $this->satuan($input['satuan_id'])->jumlah) * $this->namaBarang($input['barang_id'])->harga_jual) - $input['harga_product'],
                'is_status'     => 0,
            ]);
        }

        $this->resetInputFields();

        session()->flash('success', 'Data berhasil ditambah');
        return redirect()->route('product.index');
    }
}
