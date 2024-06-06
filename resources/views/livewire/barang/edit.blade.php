<div>
    <form class="max-w-sm mx-auto" wire:submit="update"
        enctype='multipart/form-data'>
        <div class="mb-5">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Barang
            </label>
            <input type="text" id="small-input" name="nama_barang" wire:model="nama_barang"
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-5">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Jual
            </label>
            <input type="number" id="small-input" min="0"  name="harga_jual" wire:model="harga_jual"
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
    </form>
</div>
