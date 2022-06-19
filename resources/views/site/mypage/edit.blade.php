@php
    use App\Http\ViewModels\Site\MyPage\EditViewModel;
    /** @var EditViewModel $viewModel */
@endphp
<x-site-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="p-myPageTop">
        <h2 class="font-bold" style="color: #989898;font-size: 20px;">プロフィール</h2>
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="mt-5 md:mt-0 md:col-span-3">
                <form action="{{ route('site.mypage.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    @csrf

                    <input type="hidden" name="userId" value="{{ $viewModel->getUser()->id }}">

                    <div class="overflow-hidden sm:rounded-md">
                        <div class="grid grid-cols-6 gap-5">
                            <div class="col-span-6 sm:col-span-6">
                                @include('components.form.label_open_close', ['name' => 'ユーザー名', 'open' => true])
                                @include('components.form.edit.input', ['name' => 'name', 'value' => $viewModel->getUserName()])
                            </div>
                            <div class="col-span-6 sm:col-span-6 border-t border-gray-200 pt-4">
                                @include('components.form.label_open_close', ['name' => '好きなうどん屋', 'open' => true])
                                @include('components.form.edit.textarea', ['name' => 'like_shops', 'value' => $viewModel->getUserProfile()->like_shops])
                            </div>
                            <div class="col-span-6 sm:col-span-6 border-t border-gray-200 pt-4">
                                @include('components.form.label_open_close', ['name' => '行きつけのお店', 'open' => true])
                                @include('components.form.edit.textarea', ['name' => 'many_times_shops', 'value' => $viewModel->getUserProfile()->many_times_shops])
                            </div>
                            <div class="col-span-6 sm:col-span-6 border-t border-gray-200 pt-4">
                                @include('components.form.label_open_close', ['name' => '自己紹介', 'open' => true, 'placeholder' => '自己紹介を書いてみよう!!'])
                                @include('components.form.edit.textarea', ['name' => 'profile', 'value' => $viewModel->getUserProfile()->profile])
                            </div>
                            <div class="col-span-6 sm:col-span-6 border-t border-gray-200 pt-4">
                                @include('components.form.label_open_close', ['name' => 'リンク', 'open' => true])
                                @include('components.form.edit.input', ['name' => 'url', 'value' => $viewModel->getUserProfile()->url])
                            </div>
                        </div>
                        <div class="px-4 py-3 mt-5 text-center sm:px-10">
                            <button type="submit"
                                    class="p-myPageEdit__button inline-flex justify-center py-3 px-10 border border-transparent shadow-sm text-sm font-medium rounded-md text-white font-semibold focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                更新
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-site-layout>
