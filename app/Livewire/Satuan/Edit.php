<?php

namespace App\Livewire\Satuan;

use App\Models\Satuan;
use Livewire\Component;

class Edit extends Component
{
    public $satuanId;
    public $name;
    public $jumlah;

    public function render()
    {
        return view('livewire.satuan.edit');
    }

    public function mount($id)
    {
        $satuan = Satuan::find($id);
        $this->satuanId = $satuan->id;
        $this->name = $satuan->name;
        $this->jumlah = $satuan->jumlah;
    }

    public function update()
    {
        $satuan = Satuan::find($this->satuanId);

        $satuan->update([
            'name' => $this->name,
            'jumlah' => $this->jumlah
        ]);

        session()->flash('success', 'Data berhasil diupdate');
        return redirect()->route('satuan.index');
    }
}
