<x-app-layout>
    @section('title', 'Edit Detail Product')
    @include('layouts.alert')
    @livewire('product.product-detail', ['id' => $detail->id, 'satuans' => $satuans, 'barangs' => $barangs])
</x-app-layout>
