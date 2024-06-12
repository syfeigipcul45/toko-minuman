<?php

namespace App\Livewire;

use App\Models\Keuntungan;
use App\Models\ProductDetail;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard');
    }

    public function diambil()
    {
        $diambil = Keuntungan::sum('diambil');
        return $diambil;
    }

    public function sisaUntung()
    {
        $diambil = Keuntungan::sum('diambil');
        $untung = ProductDetail::where('is_status', 1)->sum('keuntungan');
        $sisa = $untung - $diambil;
        return $sisa;
    }

    public function sumUntung()
    {
        $untung = ProductDetail::where('is_status', 1)->sum('keuntungan');
        return $untung;
    }

    public function sisaBarang()
    {
        $sisa = ProductDetail::distinct()->where('is_status', 0)->get('barang_id')->count();
        return $sisa;
    }
}

