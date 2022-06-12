<nav class="c-topPage__header z-50 border-gray-100 px-2 sm:px-4 dark:bg-gray-800 fixed"
     style="width:100%;height: 60px; background-color: rgba(26,32,44,0.45);">
    <div class="container flex flex-wrap justify-between items-center mx-auto" style="height: 60px;">
        <a href="/" style="height: 60px;" class="">
            <img src="{{ asset('image/udon_white_2.png') }}"
                 style="height: 4.5rem;" alt="店舗イメージ">
        </a>
        @if(\Illuminate\Support\Facades\Auth::check())
            <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm md:hidden" aria-controls="mobile-menu" aria-expanded="false">
                <div class="">
                    <img src="{{ asset('image/menu.svg') }}"
                         style="height: 2rem;" alt="店舗イメージ">
{{--                    <img src="{{ asset('image/x.svg') }}"--}}
{{--                         style="height: 2rem;" alt="店舗イメージ">--}}
                </div>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                <ul class="flex flex-col mt-2 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium font-bold" style="background-color: rgba(26,32,44,0.45);">
                    <li>
                        <a href="/" class="block py-2 pr-4 pl-3 border-b text-white">Top</a>
                    </li>
                    <li>
                        <a href="/mypage" class="block py-2 pr-4 pl-3 border-b text-white">マイページ</a>
                    </li>
                    <li>
                        <form id="" action="{{ route('logout') }}" method="POST" class="block pr-4 py-2 pl-3 border-b">
                            @csrf
                            <input type="submit" class="text-white font-bold" value="ログアウト">
                        </form>
                    </li>
                    <li>
                        <a href="{{ route('site.inquiries.create') }}" class="block py-2 pr-4 pl-3 text-white">お問い合わせ</a>
                    </li>
                </ul>
            </div>
        @else
            <div class="flex items-center justify-end mt-4">
                <a href="/login" style="font-size: 0.55rem;" class="ml-3 inline-flex items-center px-3 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('Log in') }}
                </a>
                <a href="/register" style="font-size: 0.55rem;" class="ml-3 inline-flex items-center px-3 py-1 bg-white border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('Register') }}
                </a>
            </div>
        @endif
    </div>

</nav>
