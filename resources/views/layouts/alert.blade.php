<script>
    @if (session()->has('success'))
        // <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
        //     role="alert">
        //     <span class="font-medium">{{ session('success') }}</span>
        // </div>
        toastr.success("{{ session('success') }}");
    @endif
</script>
@if (session()->has('error'))
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-medium">{{ session('error') }}</span>
    </div>
@endif
