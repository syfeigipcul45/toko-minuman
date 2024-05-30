<x-app-layout>
    @section('title', 'Satuan')
    @include('layouts.alert')
    @livewire('satuan-table', ['satuans' => $satuans])

</x-app-layout>
