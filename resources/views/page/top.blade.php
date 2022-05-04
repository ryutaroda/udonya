<x-site-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="px-5 full" style="background-color: #ff8739">
        @include('svg.udon')

        <div class="c-shopSearch__form">
            <form>
                <div class="flex">
                    <div class="relative w-full mx-auto">
                        <input type="search" id="search-dropdown" style="width: 300px" class="block p-4 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="店名・エリア・キーワード" required>
                        <button onclick="location.href='/udons/1'" type="submit" class="absolute top-0 right-0 py-4 px-10 text-sm font-medium text-white bg-gray-800 rounded-r-lg border border-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            検　索
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>


{{--    <style>--}}
{{--        .c-shopSearch__form{--}}
{{--            position: absolute;--}}
{{--            top: 100px;--}}
{{--        }--}}
{{--    </style>--}}
    <style>
        .full {
            position: relative;
            width: 100%;
            min-height: 100vh;
        }
        .c-shopSearch__form{
            position: absolute;
            bottom: 300px;
        }
    </style>


</x-site-layout>
