{{-- @include('components.form.create.textarea',['name'=>'']) --}}

<textarea name="{{ $name }}" id="{{ $name }}" cols="30" rows="5"
          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 border-2 rounded-md">
   {{ old($name, $value) }}
</textarea>
