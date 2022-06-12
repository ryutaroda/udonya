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
{{--        // TODO 編集画面作る--}}
    </div>
</x-site-layout>
