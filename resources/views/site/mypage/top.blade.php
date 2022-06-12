@php
    use App\Http\ViewModels\Site\MyPage\TopViewModel;
    /** @var TopViewModel $viewModel */
@endphp
<x-site-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="p-myPageTop">
        <div class="p-myPageTop__header flex justify-between">
            <div class="p-myPageTop__headerCreatedAt">
                {{ $viewModel->getUserCreatedAt() }} 登録
            </div>
            @if($viewModel->isMyMyPage())
                <div class="p-myPageTop__headerSetting flex justify-center">
                    <img src="{{ asset('image/settings.svg') }}" alt="">
                    <a href="{{ route('site.mypage.profile.edit') }}" class="">
                        <span>設定</span>
                    </a>
                </div>
            @endif
        </div>

        <div class="p-myPageTop__user">
            <div class="p-myPageTop__userAvatar w-16 h-16 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600 shadow">
                <svg class="w-18 h-18 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
            </div>
            <div class="p-myPageTop__userName">
                {{ $viewModel->getUserName() }}
            </div>
        </div>

        <div class="p-myPageTop__profile">
            <div class="p-myPageTop__profileTitle">
                好きなうどん屋
            </div>
            <div class="p-myPageTop__profileContent">
            </div>
        </div>
        <div class="p-myPageTop__profile">
            <div class="p-myPageTop__profileTitle">
                行きつけのお店
            </div>
            <div class="p-myPageTop__profileContent">
            </div>
        </div>
        <div class="p-myPageTop__profile">
            <div class="p-myPageTop__profileTitle">
                プロフィール
            </div>
            <div class="p-myPageTop__profileContent">
            </div>
        </div>
        <div class="p-myPageTop__profile">
            <div class="p-myPageTop__profileTitle">
                リンク
            </div>
            <div class="p-myPageTop__profileContent">
            </div>
        </div>

        <div class="p-myPageTop__report">
            <div class="p-myPageTop__reportTitle align-middle">
                食べた
            </div>
            <div class="p-myPageTop__reportContent">
                <div class="p-myPageTop__reportContentItem">
                    <div class="p-myPageTop__reportContentItem__name">
                    </div>
                    <div class="p-myPageTop__reportContentItem__count">
                        0
                    </div>
                    <div class="p-myPageTop__reportContentItem__unit">
                        回
                    </div>
                </div>

                <div class="p-myPageTop__reportContentItem">
                    <div class="p-myPageTop__reportContentItem__name">
                        うどん屋
                    </div>
                    <div class="p-myPageTop__reportContentItem__count">
                        0
                    </div>
                    <div class="p-myPageTop__reportContentItem__unit">
                        件
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-site-layout>
