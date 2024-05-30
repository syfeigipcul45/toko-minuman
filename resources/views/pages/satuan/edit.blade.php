<x-app-layout>
    @section('title', 'Edit Satuan')
    @include('layouts.alert')
    @livewire('satuan.edit', ['id' => $satuan->id])
</x-app-layout>
