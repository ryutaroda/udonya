<x-site-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="px-5 c-topPage">
        <div class="c-topPage__udon">
            @include('svg.udonn')
        </div>


        <div class="c-shopSearch__form">
            <form action="{{ route('page.shop.index') }}" method="GET">
                @csrf
                <div class="flex">
                    <div class="relative w-full mx-auto shadow">
                        <input type="search" id="search-dropdown" style="width: 300px"
                               name="search_word"
                               class="block p-4 w-full z-20 text-sm text-gray-900 bg-gray-50 border-none rounded-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                               placeholder="店名・エリア・キーワード" required>
                        <button onclick="location.href='/search'" type="submit"
                                class="absolute top-0 right-0 py-4 px-10 text-sm font-medium text-white bg-gray-800 border-none rounded-r-lg border border-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            検　索
                        </button>
                    </div>
                </div>
{{--                <div class="mt-5">--}}
{{--                    <a onclick="location.href='/search'" type="submit"--}}
{{--                            class="w-full py-4 px-10 text-sm text-center font-medium text-white bg-gray-800 border-none rounded-lg border border-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
{{--                        現地から探す--}}
{{--                    </a>--}}
{{--                </div>--}}

            </form>
        </div>

    </div>


</x-site-layout>
