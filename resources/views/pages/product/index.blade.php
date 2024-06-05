<x-app-layout>
    @section('title', 'Product')
    @include('layouts.alert')
    @livewire('product.product-table', ['products' => $products])

</x-app-layout>
