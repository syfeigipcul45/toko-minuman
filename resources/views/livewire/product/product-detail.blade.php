<div>
    <form class="mx-auto" wire:submit.prevent="update" enctype='multipart/form-data'>
        <div class="mb-6">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Barang
            </label>
            <select id="barang_id" name="barang_id" wire:model="barang_id"
                class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected disabled>:: Pilih Barang ::</option>
                @foreach ($barangs as $barang)
                    <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity
            </label>
            <input type="number" id="small-input" min="0" name="quantity" wire:model="quantity"
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satuan
            </label>
            <select id="satuan_id" name="satuan_id" wire:model="satuan_id"
                class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected disabled>:: Pilih Satuan ::</option>
                @foreach ($satuans as $satuan)
                    <option value="{{ $satuan->id }}">{{ $satuan->name }} -
                        {{ $satuan->jumlah }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Product
            </label>
            <input type="number" id="small-input" min="0" name="quantity" wire:model="harga_product"
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Habis
            </label>
            <select id="is_status" name="is_status" wire:model="is_status"
                class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected @required(true)>:: Pilih Status ::</option>
                <option value="1">Habis</option>
                <option value="0">Masih Ada</option>
            </select>
        </div>
        <div class="relative">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>
    </form>
</div>
