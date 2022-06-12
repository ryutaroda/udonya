<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-3 pb-2 pt-2.5 border border-transparent rounded-md font-semibold uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}
        style="font-size: 0.55rem;">
    {{ $slot }}
</button>
