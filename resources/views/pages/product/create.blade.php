<x-app-layout>
    @section('title', 'Tambah Product')
    @include('layouts.alert')
    @livewire('product.create', ['satuans' => $satuans])
</x-app-layout>
