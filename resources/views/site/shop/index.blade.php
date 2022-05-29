@php
    use App\Http\ViewModels\Site\Shop\IndexViewModel;
    /** @var IndexViewModel $viewModel */
@endphp
<x-site-layout>
    <x-slot name="title">

    </x-slot>

    <form action="{{ route('site.shop.index') }}" method="GET" class="p-searchList__searchForm">
        @csrf
        <input type="text" id="search-dropdown"
               name="search_word"
               value="{{ $viewModel->getSearchWord() }}"
               class="p-searchList__searchForm__word"
               placeholder="店名・エリア・キーワード" required>
        <button onclick="location.href='/search'" type="submit" name="word_search"
                class="p-searchList__searchForm__button">
            検索
        </button>
    </form>

    <div class="p-searchList__result">
        <div class="p-searchList__resultNumber">
            検索結果 <span class="p-searchList__resultNumber--red">{{ $viewModel->getShopTotal() }}</span>件
        </div>
        @foreach($viewModel->getShops() as $shop)
            <div class="p-searchList__resultShopCard">
                <a href="{{ route('site.shop.show', $shop) }}"></a>
                <div class="p-searchList__resultShopCard__shopImage shadow-lg">
                    <img src="{{ $viewModel->getShopImageUrl($shop) }}" alt="店舗イメージ">
                </div>
                <div class="p-searchList__resultShopCard__shopInfo">
                    <div class="p-searchList__resultShopCard__shopInfoTitle">
                        {{ $shop->name }}
                    </div>
                    <div class="p-searchList__resultShopCard__shopInfoAddress">
                        {{ $shop->post_code }}{{ ' ' }}{{ $shop->prefecture->name }}{{ ' ' }}{{ $shop->address1 }}{{ $shop->address2 }}{{ $shop->address3 }}
                    </div>
                    <div class="p-searchList__resultShopCard__shopInfoOther">
                        一杯料金：{{ $shop->min_charge }}
                    </div>
                    <div class="p-searchList__resultShopCard__shopInfoOther">
                        定休日　：{{ $shop->regular_holiday }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="py-5">
        {{ $viewModel->getShops()->links('pagination::tailwind') }}
    </div>

</x-site-layout>
