{{--<input type="text" name="{{ $name }}"  id="{{ $name }}" value="{{ old($name,$value) }}" autocomplete="{{ $name }}"--}}
{{--       @if($errors->first($name))--}}
{{--       class="mt-1 bg-red-50 focus:ring-red-500 focus:border-red-500  block w-full shadow-sm sm:text-sm border-2 border-red-400 text-red-900 placeholder-red-700 rounded-md"--}}
{{--       @else--}}
{{--       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 border-2 rounded-md"--}}
{{--    @endif--}}
{{-->--}}

{{--<div class="flex justify-center items-center w-full">--}}
{{--    <label for="{{ $name }}" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">--}}
{{--        <div class="flex flex-col justify-center items-center pt-5 pb-6">--}}
{{--            <svg class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>--}}
{{--            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>--}}
{{--            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>--}}
{{--        </div>--}}
{{--        <input type="file" class="hidden"--}}
{{--               name="{{ $name }}"  id="{{ $name }}" value="{{ old($name,$value) }}" autocomplete="{{ $name }}"--}}
{{--        />--}}
{{--    </label>--}}
{{--</div>--}}

<input type="file" name="{{ $name }}"  id="{{ $name }}" value="{{ old($name) }}" autocomplete="{{ $name }}"
    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" multiple
>

@if($errors->first($name))
    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first($name) }}</p>
@endif

