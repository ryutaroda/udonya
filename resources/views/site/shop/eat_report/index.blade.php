@php
    use App\Http\ViewModels\Site\Shop\EatReport\IndexViewModel;
    /** @var IndexViewModel $viewModel */
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
                <img src="{{ $viewModel->getShopImageUrl($viewModel->getShop()) }}" alt="店舗イメージ">
            </div>
        </div>

        <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700 mb-5">
            <ul class="flex flex-wrap -mb-px">
                <li class="mr-2">
                    <a href="{{ route('site.shop.show', $viewModel->getShop()->id) }}" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">店舗情報</a>
                </li>
                <li class="mr-2">
                    <a href="{{ route('site.shop.eat.index', $viewModel->getShop()->id) }}" class="inline-block p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500" aria-current="page">食べた(10)</a>
                </li>
            </ul>
        </div>

{{--        <div class="p-shopDetail__spec">--}}
{{--            <div class="p-shopDetail__specTitle p-shopDetail__specTitle--square">--}}
{{--                <h3 class="p-shopDetail__specTitleString">食べた</h3>--}}
{{--            </div>--}}
{{--            <div class="p-shopDetail__specBody">--}}
{{--                <div class="p-shopDetail__menuList">--}}
{{--                    @foreach($viewModel->getEatReports() as $eat)--}}
{{--                        <div class="p-shopDetail__menu">--}}
{{--                            <div class="p-shopDetail__menuImage shadow-lg">--}}
{{--                                <img src="{{ $viewModel->getEatImageUrl($eat->path) }}" alt="うどんイメージ">--}}
{{--                            </div>--}}
{{--                            <div class="p-shopDetail__menuInfo">--}}
{{--                                {{ $eat->contents }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>


</x-site-layout>
