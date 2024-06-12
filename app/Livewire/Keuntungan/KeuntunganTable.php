<?php

namespace App\Livewire\Keuntungan;

use App\Models\Keuntungan;
use Livewire\Component;

class KeuntunganTable extends Component
{
    public $keuntungans;
    public $selectKeuntungansId = 0;

    public function render()
    {
        return view('livewire.keuntungan.keuntungan-table');
    }

    public function fetchKeuntungans()
    {
        $keuntungans = Keuntungan::orderby('tanggal_diambil', 'desc')->get();
        return $keuntungans;
    }

    public function changeDelete($keuntunganID)
    {
        $this->selectKeuntungansId = $keuntunganID;
    }

    public function deleteKeuntungan()
    {
        if ($this->selectKeuntungansId == 0) {
            return;
        }
        $keuntungan = Keuntungan::findOrFail($this->selectKeuntungansId);
        $keuntungan->delete();
        $this->keuntungans = $this->fetchKeuntungans();
        session()->flash('success', 'Data has been saved successfully!');
        $this->selectKeuntungansId = 0;
    }
}
