<x-app-layout>
    @section('title', 'Show Detail Product')
    @include('layouts.alert')
    @livewire('product.show', ['product' => $product, 'product_id' => $product->id, 'satuans' => $satuans ,'barangs' => $barangs])

</x-app-layout>
