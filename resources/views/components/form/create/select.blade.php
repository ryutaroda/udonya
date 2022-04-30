
<select id="{{ $name }}" name="{{ $name }}" autocomplete="{{ $name }}"
        @if($errors->first($name))
        class="mt-1 bg-red-50 focus:ring-red-500 focus:border-red-500  block w-full shadow-sm sm:text-sm border-2 border-red-400 text-red-900 placeholder-red-700 rounded-md"
        @else
        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 border-2 rounded-md"
        @endif
>
    <option value="">選択ししてください</option>
    @foreach($collection as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
    @endforeach
</select>
@if($errors->first($name))
    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first($name) }}</p>
@endif
