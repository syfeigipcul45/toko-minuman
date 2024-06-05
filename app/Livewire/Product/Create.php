<?php

namespace App\Livewire\Product;

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

    public $nama_barang;
    public $quantity;
    public $satuan_id;
    public $harga_product;
    public $harga_jual;
    public $harga_botol;

    public $satuans;
    public Collection $inputs;
    public $i = 1;

    public function mount ()
    {
        $this->inputs = collect();
        dd($this->harga_botol = $this->jumlahSatuan($this->satuan_id));
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
            'nama_barang' => null,
            'quantity' => null,
            'satuan_id' => null,
            'harga_product' => null,
            'harga_jual' => null,
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
        $this->nama_barang = '';
        $this->quantity = '';
        $this->satuan_id = '';
        $this->harga_product = '';
        $this->harga_jual = '';
    }

    public function updated()
    {

    }

    public function create()
    {
        $this->id = Product::get()->count();
        Product::create([
            'id' => ($this->id + 1),
            'tanggal_beli' => $this->tanggal_beli,
            'nama_toko' => $this->nama_toko
        ]);

        // dd($this->inputs);
        foreach ($this->inputs as $input) {
            ProductDetail::create([
                'nama_barang'   => $input['nama_barang'],
                'product_id'    => ($this->id + 1),
                'quantity'      => $input['quantity'],
                'satuan_id'     => $input['satuan_id'],
                'harga_product' => $input['harga_product'],
                'harga_jual'    => $input['harga_jual'],
                'is_status'     => 0,
            ]);
        }

        $this->resetInputFields();

        session()->flash('success', 'Data berhasil ditambah');
        return redirect()->route('product.index');
    }
}
