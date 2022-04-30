
<select id="{{ $name }}" name="{{ $name }}" autocomplete="{{ $name }}"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 border-2 sm:text-sm">

    <option value="">選択ししてください</option>
    @foreach($collection as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
    @endforeach
</select>
