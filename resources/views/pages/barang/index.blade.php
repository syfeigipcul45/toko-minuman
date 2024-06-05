<x-app-layout>
    @section('title', 'Data Barang')
    @include('layouts.alert')
    @livewire('barang.barang-table', ['barangs' => $barangs])

</x-app-layout>
