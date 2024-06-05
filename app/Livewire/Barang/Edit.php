<?php

namespace App\Livewire\Barang;

use App\Models\Barang;
use Livewire\Component;

class Edit extends Component
{
    public $barangID;
    public $nama_barang;
    public function render()
    {
        return view('livewire.barang.edit');
    }

    public function mount($id)
    {
        $barang = Barang::find($id);
        $this->barangID = $barang->id;
        $this->nama_barang = $barang->nama_barang;
    }

    public function update()
    {
        $barang = Barang::find($this->barangID);

        $barang->update([
            'nama_barang' => $this->nama_barang,
        ]);

        session()->flash('success', 'Data berhasil diupdate');
        return redirect()->route('barang.index');
    }
}
