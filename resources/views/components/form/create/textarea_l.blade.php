{{-- @include('components.form.create.textarea',['name'=>'']) --}}

<textarea name="{{ $name }}" id="{{ $name }}" cols="30" rows="10"
          @if($errors->first($name))
          class="mt-1 bg-red-50 focus:ring-red-500 focus:border-red-500  block w-full shadow-sm sm:text-sm border-2 border-red-400 text-red-900 placeholder-red-700 rounded-md"
          @else
          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 border-2 rounded-md"
          @endif
>{{ old($name) }}</textarea>


@if($errors->first($name))
    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first($name) }}</p>
@endif
