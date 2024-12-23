<div>
    {{-- <form class="mx-auto" wire:submit.prevent="update" enctype='multipart/form-data'> --}}
    <div class="mb-6">
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Beli
        </label>
        <input type="date" id="small-input" name="tanggal_beli" wire:model="tanggal_beli"
            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-6">
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Toko
        </label>
        <input type="text" id="small-input" name="nama_toko" wire:model="nama_toko"
            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="relative overflow-x-auto">
        <table id="table-product" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Barang
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Qty
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Satuan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga Product
                    </th>
                    <th>
                        Keuntungan
                    </th>
                    <th scope="col" class="px-6 py-3">

                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" id="">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="px-6 py-4">
                            <input type="text" id="small-input" name="nama_barang" wire:model="details.0.nama_barang"
                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </td>
                        <td class="px-6 py-4">
                            <input type="number" id="small-input" min="0" name="quantity"
                                wire:model="details.0.quantity"
                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </td>
                        <td class="px-6 py-4">
                            <select id="satuan" name="satuan" wire:model="details.0.satuan_id"
                                class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>:: Pilih Satuan ::</option>
                                @foreach ($satuans as $satuan)
                                    <option value="{{ $satuan->id }}">{{ $satuan->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td class="px-6 py-4">
                            <input type="number" id="small-input" min="0" name="harga_product"
                                wire:model="details.0.harga_product"
                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </td>
                        <td class="px-6 py-4">
                            <input type="number" id="small-input" min="0" name="harga_botol" disabled
                                wire:model='details.0.harga_botol'
                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </td>
                        <td class="px-6 py-4">
                            <input type="number" id="small-input" min="0" name="harga_jual"
                                wire:model="details.0.harga_jual"
                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </td>
                        <td class="px-6 py-4">
                            <button type="button" id="addBtn" wire:click="addInputs"
                                class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-add"></i>
                            </button>
                        </td>
                    </tr> --}}
                @php
                    $total = 0;
                @endphp
                @foreach ($details as $index => $detail)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" id="">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $index + 1 }}
                            <input type="number" id="small-input" min="0" name="id" hidden
                                wire:model="details.{{ $index }}.id" value="{{ $detail->id }}">
                        </th>
                        <td class="px-6 py-4">
                            {{ $this->namaBarang($detail->barang_id)->nama_barang }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $detail->quantity }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $this->satuan($detail->satuan_id)->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ number_format($detail->harga_product) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ number_format($detail->keuntungan) }}
                        </td>
                        <td class="px-6 py-4">
                            @if ($this->checkStatus($detail->id) != 0)
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Habis</span>
                            @else
                                {{-- <input type="number" id="small-input" min="0" name="is_status"
                                    wire:model="details.{{ $index }}.is_status"
                                    value="1"
                                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> --}}
                                {{-- <input id="default-checkbox" type="checkbox"
                                        wire:model.defer="inputs.{{ $index }}.is_status" value="1"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> --}}
                                <a href="{{ route('product.edit.product-detail', $detail->id) }}"
                                    class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i
                                        class="fas fa-edit"></i> </a>
                                {{-- <button wire:click = "changeUpdate({{ $detail->id }})"
                                    data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                    class="px-3 py-2 text-xs font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-pencil"></i> --}}
                                </button>
                                {{-- <input id="default-checkbox" type="checkbox"
                                        wire:model="details.{{ $index }}.is_status" value="1"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> --}}
                            @endif
                        </td>
                    </tr>
                    @php
                        $total += $detail->keuntungan;
                    @endphp
                @endforeach
                <tr>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Total
                    </th>
                    <td class="px-6 py-4">
                    </td>
                    <td class="px-6 py-4">
                    </td>
                    <td class="px-6 py-4">
                    </td>
                    <td class="px-6 py-4">
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Rp
                            {{ number_format($total) }}</span>
                    </td>
                    <td class="px-6 py-4">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="relative">
        <div class="mb-6">

        </div>
    </div>
    <div class="relative">
        {{-- <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button> --}}
    </div>
    {{-- </form> --}}
    <div id="popup-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <form class="mx-auto" wire:submit="updateProduct()" enctype='multipart/form-data'>
                    <!-- Modal header -->
                    {{-- <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Terms of Service
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div> --}}
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <div class="mb-6">
                            <label for="small-input"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Barang
                            </label>
                            <select id="barang_id" name="barang_id" wire:model="barang_id"
                                class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>:: Pilih Barang ::</option>
                                @foreach ($barangs as $barang)
                                    <option value="{{ $barang->id }}"
                                        @if ($this->barang_id == $barang->id) selected @endif>{{ $barang->nama_barang }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="small-input"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity
                            </label>
                            <input type="text" id="small-input" name="quantity" wire:model="quantity"
                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                            accept</button>
                        <button data-modal-hide="popup-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <div wire:ignore.self id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <form class="mx-auto" wire:submit.prevent="create" enctype='multipart/form-data'>
                    <div class="mb-6">
                        <label for="small-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Beli
                        </label>
                        <input type="date" id="small-input" name="tanggal_beli" wire:model="tanggal_beli"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for="small-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Toko
                        </label>
                        <input type="text" id="small-input" name="nama_toko" wire:model="nama_toko"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

</div>
