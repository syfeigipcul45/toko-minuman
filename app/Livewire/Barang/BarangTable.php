<?php

namespace App\Livewire\Barang;

use App\Models\Barang;
use Livewire\Component;

class BarangTable extends Component
{
    public $barangs;
    public $selectBarangsId = 0;
    public $barangIdBeingRemoved = null;

    public function render()
    {
        return view('livewire.barang.barang-table');
    }

    public function fetchBarangs()
    {
        $barangs = Barang::all();
        return $barangs;
    }

    public function changeDelete($barangID)
    {
        $this->selectBarangsId = $barangID;
    }

    public function confirmBarangRemoval($barangId)
    {
        $this->barangIdBeingRemoved = $barangId;

        $this->dispatch('show-delete-modal');
    }

    public function deleteBarang()
    {
        if ($this->selectBarangsId == 0) {
            return;
        }
        $barang = Barang::findOrFail($this->selectBarangsId);
        $barang->delete();
        $this->barangs = $this->fetchBarangs();
        $this->selectBarangsId = 0;
        $this->dispatch('delete');
    }
}
