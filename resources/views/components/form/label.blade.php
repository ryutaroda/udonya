<label for="street-address" class="block text-sm font-semibold text-gray-600 align-middle mb-2">
    {{ $name }}
    @if($required)
        <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">必須</span>
    @endif
</label>
