<x-site-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="px-5 c-topPage">
        <div class="c-topPage__udon mb-5">
            @include('img.svg.udonn')
        </div>

        <form action="{{ route('site.shop.index') }}" method="GET" class="p-searchList__searchForm">
            @csrf
            <input type="search" id="search-dropdown"
                   name="search_word"
                   class="p-searchList__searchForm__word"
                   placeholder="店名・エリア・キーワード" required>
            <button onclick="location.href='/search'" type="submit" name="word_search"
                    class="p-searchList__searchForm__button">
                検索
            </button>
        </form>



    </div>


</x-site-layout>