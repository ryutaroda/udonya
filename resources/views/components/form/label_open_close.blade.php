<label for="street-address" class="block text-sm font-semibold text-gray-600 align-middle mb-2">
    {{ $name }}
    @if($open)
        <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">公開</span>
    @else
        <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">非公開</span>
    @endif
</label>
