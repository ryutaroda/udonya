<x-site-layout>
    <x-slot name="title">
        お問合せ
    </x-slot>

    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="mt-5 md:mt-0 md:col-span-3">
            <form action="{{ route('site.inquiries.store') }}" method="POST" enctype="multipart/form-data">
                @method('POST')
                @csrf

                <h1 class="text-center font-bold" style="color: #989898">お問合せフォーム</h1>

                <div class="overflow-hidden sm:rounded-md">
                    <div class="px-2 sm:px-4 py-5 sm:p-10">
                        <div class="grid grid-cols-6 gap-5">

                            <div class="col-span-6 sm:col-span-4 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => 'メールアドレス', 'required' => true])
                                @include('components.form.create.input', ['name' => 'email'])
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                @include('components.form.label', ['name' => 'お名前', 'required' => true])
                                @include('components.form.create.input', ['name' => 'name'])
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => '件名', 'required' => true])
                                @include('components.form.create.input', ['name' => 'title'])
                            </div>

                            <div class="col-span-6 sm:col-span-4 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => 'お問い合わせ内容詳細', 'required' => true])
                                @include('components.form.create.textarea', ['name' => 'contents'])
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                            </div>

                        </div>
                    </div>
                    <div class="px-4 py-3 text-center sm:px-10">
                        <button type="submit"
                                class="inline-flex justify-center py-3 px-10 border border-transparent shadow-sm text-sm font-medium rounded-md text-white font-semibold bg-blue-700 hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                onclick='return confirm("お問合せを送信しますか？");'>
                            送信
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


</x-site-layout>
