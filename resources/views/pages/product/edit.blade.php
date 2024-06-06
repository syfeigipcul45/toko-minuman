<x-app-layout>
    @section('title', 'Edit Detail Product')
    @include('layouts.alert')
    @livewire('product.edit', ['product' => $product, 'product_id' => $product->id, 'satuans' => $satuans ,'barangs' => $barangs])

</x-app-layout>
