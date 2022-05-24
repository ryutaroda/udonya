<x-site-layout>
    <x-slot name="title">

    </x-slot>

    <form action="{{ route('site.shop.index') }}" method="GET" class="p-searchList__searchForm">
        @csrf
        <input type="search" id="search-dropdown"
               name="search_word"
               value="{{ $searchWord }}"
               class="p-searchList__searchForm__word"
               placeholder="店名・エリア・キーワード" required>
        <button onclick="location.href='/search'" type="submit" name="word_search"
                class="p-searchList__searchForm__button">
            検索
        </button>
    </form>

    <div class="p-searchList__result">
        <div class="p-searchList__resultNumber">
            検索結果 <span class="p-searchList__resultNumber--red">{{ $shops->total() }}</span>件
        </div>
        @foreach($shops as $shop)
            <div class="p-searchList__resultShopCard">
                <a href="{{ route('site.shop.show', $shop) }}"></a>
                <div class="p-searchList__resultShopCard__shopImage shadow-lg">
                    @isset($shop->shop_image_path)
                        @if(Illuminate\Support\Facades\Storage::exists($shop->shop_image_path))
                            <img src="{{ Illuminate\Support\Facades\Storage::url($shop->shop_image_path) }}" alt="店舗イメージ">
                        @else
                            <img src="{{ asset('image/no_image01.jpeg') }}" alt="ノーイメージ">
                        @endif
                    @else
                        <img src="{{ asset('image/no_image01.jpeg') }}" alt="ノーイメージ">
                    @endisset
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
        {{ $shops->links('pagination::tailwind') }}
    </div>

</x-site-layout>
