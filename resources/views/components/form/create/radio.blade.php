{{-- @include('components.form.create.radio', ['name' => '']) --}}

<fieldset>
    <div class="mt-0 space-y-4">
        <div class="flex items-center">
            <input id="{{ $name }}" name="{{ $name }}" type="radio" value="" {{ old($name) === null  ? 'checked' : '' }} class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
            <label for="{{ $name }}" class="ml-3 block text-sm font-medium text-gray-700"> わからない </label>
        </div>
        <div class="flex items-center">
            <input id="{{ $name }}" name="{{ $name }}" type="radio" value=1 {{ old($name) === "1"  ? 'checked' : '' }} class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
            <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700"> 有 </label>
        </div>
        <div class="flex items-center">
            <input id="{{ $name }}" name="{{ $name }}" type="radio" value=0 {{ old($name) === "0"  ? 'checked' : '' }} class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
            <label for="{{ $name }}" class="ml-3 block text-sm font-medium text-gray-700">無 </label>
        </div>
    </div>
</fieldset>
