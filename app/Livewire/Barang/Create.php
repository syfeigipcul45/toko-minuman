<?php

namespace App\Livewire\Barang;

use App\Models\Barang;
use Livewire\Component;

class Create extends Component
{
    public $nama_barang;
    public $harga_jual;

    public function render()
    {
        return view('livewire.barang.create');
    }

    public function create()
    {
        Barang::create([
            'nama_barang' => $this->nama_barang,
            'harga_jual'  => $this->harga_jual,
        ]);

        // $this->dispatch('success', ['message' => 'Data berhasil ditambah']);
        session()->flash('success', 'Data berhasil ditambah');
        return redirect()->route('barang.index');
    }
}
