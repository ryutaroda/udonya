@php
    use App\Http\ViewModels\Site\Shop\ShowViewModel;
    /** @var ShowViewModel $viewModel */
@endphp
<x-site-layout>
    <div class="p-shopDetail">
        <div class="p-shopDetail__head">
            <div class="p-shopDetail__headShopName">
                {{ $viewModel->getShop()->name }}
            </div>
            <div class="p-shopDetail__headAddress">
                〒{{ $viewModel->getShop()->post_code }}{{ ' ' }}{{ $viewModel->getShop()->prefecture->name }}{{ ' ' }}{{ $viewModel->getShop()->address1 }}{{ $viewModel->getShop()->address2 }}{{ $viewModel->getShop()->address3 }}
            </div>
            <div class="p-shopDetail__headShopImage">
                <img src="{{ $viewModel->getShopImageUrl() }}" alt="店舗イメージ">
            </div>
        </div>

        <div class="p-shopDetail__spec">
            <div class="p-shopDetail__specTitle p-shopDetail__specTitle--square">
                <h3 class="p-shopDetail__specTitleString">食べたうどん</h3>
            </div>
            <div class="p-shopDetail__specBody">
                <div class="p-shopDetail__menuList">
                    @foreach($viewModel->getShopMenuList() as $menu)
                        <div class="p-shopDetail__menu">
                            <div class="p-shopDetail__menuImage shadow-lg">
                                <img src="{{ $viewModel->getMenuImageUrl($menu) }}" alt="うどんイメージ">
                            </div>
                            <div class="p-shopDetail__menuInfo">
                                {{ $menu->name }} / {{ $menu->price }}円
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="p-shopDetail__spec">
            <div class="p-shopDetail__specTitle p-shopDetail__specTitle--square">
                <h3 class="p-shopDetail__specTitleString">メニュー</h3>
            </div>
            <div class="p-shopDetail__specBody shadow-lg">
                <img src="{{ $viewModel->getShopMenuImageUrl() }}" alt="店舗イメージ">
            </div>
        </div>

        <div class="p-shopDetail__spec">
            <div class="p-shopDetail__specTitle p-shopDetail__specTitle--square">
                <h3 class="p-shopDetail__specTitleString">営業時間</h3>
            </div>
            <div class="p-shopDetail__specBody">
                <p class="p-shopDetail__specBodyText">{{ $viewModel->getShop()->business_hours }}</p>
            </div>
        </div>
        <div class="p-shopDetail__spec">
            <div class="p-shopDetail__specTitle p-shopDetail__specTitle--square">
                <h3 class="p-shopDetail__specTitleString">支払方法</h3>
            </div>
            <div class="p-shopDetail__specBody">
                <p class="p-shopDetail__specBodyText">{{ $viewModel->getShop()->payment_detail }}</p>
            </div>
        </div>

    </div>


</x-site-layout>
