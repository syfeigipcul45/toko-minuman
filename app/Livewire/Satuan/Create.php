<?php

namespace App\Livewire\Satuan;

use App\Models\Satuan;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $jumlah;

    public function render()
    {
        return view('livewire.satuan.create');
    }

    public function create()
    {
        Satuan::create([
            'name' => $this->name,
            'jumlah' => $this->jumlah
        ]);

        session()->flash('success', 'Data berhasil ditambah');
        return redirect()->route('satuan.index');
    }
}
