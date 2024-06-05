<x-app-layout>
    @section('title', 'Edit Barang')
    @include('layouts.alert')
    @livewire('barang.edit', ['id' => $barang->id])
</x-app-layout>
