<x-app-layout>
    @section('title', 'Laba Bersih')
    @include('layouts.alert')
    @livewire('laba-bersih.laba-table', ['labas' => $labas])

</x-app-layout>
