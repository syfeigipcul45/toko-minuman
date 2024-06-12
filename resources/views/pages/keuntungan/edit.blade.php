<x-app-layout>
    @section('title', 'Edit Keuntungan')
    @include('layouts.alert')
    @livewire('keuntungan.edit', ['id' => $keuntungan->id])
</x-app-layout>
