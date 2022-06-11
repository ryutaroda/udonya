<nav class="c-topPage__header z-50 border-gray-100 px-2 sm:px-4 dark:bg-gray-800 fixed"
     style="width:100%;height: 60px; background-color: rgba(26,32,44,0.45);">
    <div class="container flex flex-wrap justify-between items-center mx-auto" style="height: 60px;">
        <a href="/" style="height: 60px;" class="">
            <img src="{{ asset('image/udon_white_2.png') }}"
                 style="height: 4.5rem;" alt="店舗イメージ">
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm md:hidden" aria-controls="mobile-menu" aria-expanded="false">
            <div class="">
                <img src="{{ asset('image/menu.svg') }}"
                     style="height: 2rem;" alt="店舗イメージ">
{{--                <img src="{{ asset('image/x.svg') }}"--}}
{{--                     style="height: 2rem;" alt="店舗イメージ">--}}
            </div>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-2 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium" style="background-color: rgba(26,32,44,0.45);">
                <li>
                    <a href="/" class="block py-2 pr-4 pl-3 border-b text-white">Top</a>
                </li>
                <li>
                    <a href="/register" class="block py-2 pr-4 pl-3 border-b text-white">新規登録</a>
                </li>
                <li>
                    <a href="/login" class="block py-2 pr-4 pl-3 border-b text-white">ログイン</a>
                </li>
                <li>
                    <a href="/mypage" class="block py-2 pr-4 pl-3 border-b text-white">マイページ</a>
                </li>
                <li>
                    <a href="/logout" class="block py-2 pr-4 pl-3 border-b text-white">ログアウト</a>
                </li>
                <li>
                    <a href="{{ route('site.inquiries.create') }}" class="block py-2 pr-4 pl-3 text-white">お問い合わせ</a>
                </li>
            </ul>
        </div>
    </div>

</nav>
