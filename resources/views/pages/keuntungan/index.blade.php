<x-app-layout>
    @section('title', 'Keuntungan')
    @include('layouts.alert')
    @livewire('keuntungan.keuntungan-table', ['keuntungans' => $keuntungans])

</x-app-layout>
