<?php

namespace App\Livewire;

use App\Models\Satuan;
use Livewire\Component;

class SatuanTable extends Component
{
    public $satuans;
    public $selectSatuansId = 0;

    public function render()
    {
        return view('livewire.satuan-table');
    }

    public function fetchSatuans()
    {
        $satuans = Satuan::all();
        return $satuans;
    }

    public function changeDelete($satuanID)
    {
        $this->selectSatuansId = $satuanID;
    }

    public function deleteSatuan()
    {
        if ($this->selectSatuansId == 0) {
            return;
        }
        $satuan = Satuan::findOrFail($this->selectSatuansId);
        $satuan->delete();
        $this->satuans = $this->fetchSatuans();
        session()->flash('success', 'Data has been saved successfully!');
        $this->selectSatuansId = 0;
    }
}
