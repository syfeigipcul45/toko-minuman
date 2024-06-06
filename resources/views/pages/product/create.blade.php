<x-app-layout>
    @section('title', 'Tambah Product')
    @include('layouts.alert')
    @livewire('product.create', ['satuans' => $satuans, 'barangs' => $barangs])
</x-app-layout>
