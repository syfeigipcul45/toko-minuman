<div>
    <div>
        {{-- <div class="relative"> --}}
            {{-- <div class="inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none"> --}}
                <a href="{{ route('keuntungan.create') }}"
                    class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i
                        class="fas fa-add"></i> Tambah</a>
            {{-- </div> --}}
        {{-- </div> --}}
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Jumlah Diambil
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Diambil
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($keuntungans as $keuntungan)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ number_format($keuntungan->diambil) }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $keuntungan->tanggal_diambil }}
                            </th>
                            <td class="px-6 py-4">
                                {{-- <div class="flex justify-center m-5"> --}}
                                <a href="{{ route('keuntungan.edit', $keuntungan->id) }}"
                                    class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i
                                        class="fas fa-edit"></i> Edit</a>
                                <button wire:click = "changeDelete({{ $keuntungan->id }})" data-modal-target="popup-modal"
                                    data-modal-toggle="popup-modal"
                                    class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                    <i class="fas fa-times"></i> Delete
                                </button>
                                {{-- </div> --}}
                            </td>
                        </tr>
                        @include('pages.keuntungan.modal-delete')
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
