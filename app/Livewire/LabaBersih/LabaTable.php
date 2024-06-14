<?php

namespace App\Livewire\LabaBersih;

use App\Models\Barang;
use Livewire\Component;

class LabaTable extends Component
{
    public $labas;

    public function render()
    {
        return view('livewire.laba-bersih.laba-table');
    }

    public function namaBarang($barangID)
    {
        $barang = Barang::find($barangID);
        return $barang->nama_barang;
    }


}
