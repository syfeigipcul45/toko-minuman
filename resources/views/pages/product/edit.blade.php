<x-app-layout>
    @section('title', 'Edit Detail Product')
    @include('layouts.alert')
    @livewire('product.edit', ['product' => $product, 'product_id' => $product->id, 'satuans' => $satuans ,'barangs' => $barangs])
    {{-- <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Beli
            </label>
            <input type="date" id="small-input" name="tanggal_beli" wire:model="tanggal_beli"
                value="{{ $product->tanggal_beli }}" disabled
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Toko
            </label>
            <input type="text" id="small-input" name="nama_toko" wire:model="nama_toko"
                value="{{ $product->nama_toko }}" disabled
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
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($details as $index => $detail)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" id="">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $index + 1 }}
                                <input type="number" id="small-input" min="0" name="detail_id[]" hidden
                                    wire:model="details.{{ $index }}.id" value="{{ $detail->id }}">
                            </th>
                            <td class="px-6 py-4">
                                <select id="barang_id" name="barang_id[]" disabled
                                    wire:model="details.{{ $index }}.barang_id"
                                    class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected disabled>:: Pilih Barang ::</option>
                                    @foreach ($barangs as $barang)
                                        <option value="{{ $barang->id }}"
                                            @if ($detail->barang_id == $barang->id) selected @endif>{{ $barang->nama_barang }}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 py-4">
                                <input type="number" id="small-input" min="0" name="quantity[]" disabled
                                    wire:model="details.{{ $index }}.quantity" value="{{ $detail->quantity }}"
                                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </td>
                            <td class="px-6 py-4">
                                <select id="satuan_id" name="satuan_id[]" disabled
                                    wire:model="details.{{ $index }}.satuan_id"
                                    class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected disabled>:: Pilih Satuan ::</option>
                                    @foreach ($satuans as $satuan)
                                        <option value="{{ $satuan->id }}"
                                            @if ($detail->satuan_id == $satuan->id) selected @endif>{{ $satuan->name }} -
                                            {{ $satuan->jumlah }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 py-4">
                                <input type="number" id="small-input" min="0" name="harga_product[]" disabled
                                    wire:model="details.{{ $index }}.harga_product"
                                    value="{{ $detail->harga_product }}"
                                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </td>
                            <td class="px-6 py-4">
                                <input type="number" id="small-input" min="0" name="keuntungan[]" disabled
                                    wire:model="details.{{ $index }}.keuntungan"
                                    value="{{ $detail->keuntungan }}"
                                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </td>
                            <td class="px-6 py-4">
                                @if ($detail->is_status != 0)
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Habis</span>
                                @else
                                    <input id="default-checkbox" type="checkbox" name="is_status[]"
                                        wire:model.defer="details.{{ $index }}.is_status"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Habis</label>
                                @endif
                            </td>
                        </tr>
                        @php
                            $total += $detail->keuntungan;
                        @endphp
                    @endforeach
                    <tr>
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>
    </form> --}}
</x-app-layout>
