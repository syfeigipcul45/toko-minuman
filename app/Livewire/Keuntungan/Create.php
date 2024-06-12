<?php

namespace App\Livewire\Keuntungan;

use App\Models\Keuntungan;
use App\Models\ProductDetail;
use Livewire\Component;

class Create extends Component
{
    public $diambil;
    public $tanggal_diambil;

    public function render()
    {
        return view('livewire.keuntungan.create');
    }

    public function sisaUntung()
    {
        $diambil = Keuntungan::sum('diambil');
        $untung = ProductDetail::where('is_status', 1)->sum('keuntungan');
        $sisa = $untung - $diambil;
        return $sisa;
    }

    public function create()
    {
        if ($this->diambil > $this->sisaUntung()) {
            session()->flash('error', 'Uang diambil melebihi sisa keuntungan');
            return redirect()->route('keuntungan.create');
        } else {
            Keuntungan::create([
                'diambil' => $this->diambil,
                'tanggal_diambil'  => $this->tanggal_diambil,
            ]);

            session()->flash('success', 'Data berhasil ditambah');
            return redirect()->route('keuntungan.index');
        }
    }
}
