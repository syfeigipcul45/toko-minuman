<div>

    <div>
        <div class="relative">
            {{-- <div class="inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none"> --}}
                <p class="ms-3 text-lg font-medium text-gray-900 dark:text-white">Tanggal Beli: {{ $product->tanggal_beli }}</p>
                <p class="ms-3 text-lg font-medium text-gray-900 dark:text-white">Nama Toko: {{ $product->nama_toko }}</p>
            {{-- </div> --}}
        </div>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                        <th scope="col" class="px-6 py-3">
                            Harga/pcs
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga Jual
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Jual
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Untung
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1
                    @endphp
                    @forelse ($details as $detail)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $no++ }}
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
                                {{ number_format($detail->harga_product/($this->satuan($detail->satuan_id)->jumlah * $detail->quantity))}}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($this->namaBarang($detail->barang_id)->harga_jual) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($this->namaBarang($detail->barang_id)->harga_jual * ($this->satuan($detail->satuan_id)->jumlah) * $detail->quantity) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($detail->keuntungan) }}
                            </td>
                        </tr>
                        @include('pages.product.modal-delete')
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
