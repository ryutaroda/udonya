<x-admin-layout>

    <div
        class="p-4 mb-2 sm:mb-4 mx-2 sm:p-10 bg-white rounded-lg border shadow-sm sm:p-10 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex justify-between">
            <h5 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white">お店情報を編集</h5>
            <a href="{{ route('admin.shop.index') }}" class="inline-flex justify-center shadow-lg py-3 px-8 border border-transparent shadow-sm text-sm font-medium rounded-md text-white font-semibold bg-blue-700 hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                一覧に戻る
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
        <p class="text-xs leading-snug">
            うどん屋の登録をお願いします。<br>
            入力項目が多数あるので、不明な箇所は未入力のままでも登録できます。
        </p>
    </div>

    {{--    <div class="mt-10 sm:mt-0">--}}
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="mt-5 md:mt-0 md:col-span-3">
            <form action="{{ route('admin.shop.update', $shop) }}" method="POST" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="overflow-hidden sm:rounded-md">
                    <div class="px-2 sm:px-4 py-5 sm:p-10">
                        <div class="grid grid-cols-6 gap-5">


                            <div class="col-span-6 sm:col-span-4">
                                @include('components.form.label', ['name' => 'お店の名前', 'required' => true])
                                @include('components.form.edit.input', ['name' => 'name', 'value' => $shop->name])
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                            </div>

                            <div class="col-span-6 sm:col-span-4 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => 'お店の写真', 'required' => false])
                                @include('components.form.edit.file', ['name' => 'shop_image_path', 'value' => $shop->shop_image_path])
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                            </div>

                            <div class="col-span-6 sm:col-span-4 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => 'メニューの写真', 'required' => false])
                                @include('components.form.edit.file', ['name' => 'menu_image_path', 'value' => $shop->menu_image_path])
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => '都道府県', 'required' => true])
                                @include('components.form.edit.select', ['name' => 'prefecture_id', 'collection' => $prefectures, 'value' => $shop->prefecture_id])
                            </div>
                            <div class="col-span-6 sm:col-span-6 lg:col-span-2 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => '郵便番号', 'required' => false])
                                @include('components.form.edit.input', ['name' => 'post_code', 'value' => $shop->post_code])
                            </div>
                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => '住所１', 'required' => false])
                                @include('components.form.edit.input', ['name' => 'address1', 'value' => $shop->address1])
                            </div>
                            <div class="col-span-6 sm:col-span-6 lg:col-span-2 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => '住所２', 'required' => false])
                                @include('components.form.edit.input', ['name' => 'address2', 'value' => $shop->address2])
                            </div>
                            <div class="col-span-6 sm:col-span-6 lg:col-span-2 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => '住所３', 'required' => false])
                                @include('components.form.edit.input', ['name' => 'address3', 'value' => $shop->address3])
                            </div>

                            <div class="col-span-6 sm:col-span-4 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => '最低料金', 'required' => false])
                                @include('components.form.edit.input', ['name' => 'min_charge', 'value' => $shop->min_charge])
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                            </div>

                            <div class="col-span-6 sm:col-span-4 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => '定休日', 'required' => false])
                                @include('components.form.edit.input', ['name' => 'regular_holiday', 'value' => $shop->regular_holiday])
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                            </div>

                            <div class="col-span-6 sm:col-span-4 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => '営業時間', 'required' => false])
                                @include('components.form.edit.textarea', ['name' => 'business_hours', 'value' => $shop->business_hours])
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                            </div>

                            <div class="col-span-6 sm:col-span-4 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => '支払方法', 'required' => false])
                                @include('components.form.edit.input', ['name' => 'payment_method', 'value' => $shop->payment_method])
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                            </div>

                            <div class="col-span-6 sm:col-span-4 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => '支払方法詳細', 'required' => false])
                                @include('components.form.edit.textarea', ['name' => 'payment_detail', 'value' => $shop->payment_detail])
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                            </div>

                            <div class="col-span-6 sm:col-span-4 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => '駐車場情報', 'required' => false])
                                @include('components.form.edit.input', ['name' => 'parking_info', 'value' => $shop->parking_info])
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                            </div>

                            <div class="col-span-6 sm:col-span-4 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => '座席数', 'required' => false])
                                @include('components.form.edit.input', ['name' => 'seat_spaces', 'value' => $shop->seat_spaces])
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                            </div>

                            <div class="col-span-6 sm:col-span-4 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => '電話番号', 'required' => false])
                                @include('components.form.edit.input', ['name' => 'tel', 'value' => $shop->tel])
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                            </div>

                            <div class="col-span-6 sm:col-span-4 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => 'ホームページリンク', 'required' => false])
                                @include('components.form.edit.input', ['name' => 'hp_link', 'value' => $shop->hp_link])
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                            </div>

                            <div class="col-span-6 sm:col-span-4 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => '座敷の有無', 'required' => false])
                                @include('components.form.edit.radio', ['name' => 'has_tatami_room', 'value' => $shop->has_tatami_room])
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                            </div>

                            <div class="col-span-6 sm:col-span-4 border-t border-gray-100 pt-2">
                                @include('components.form.label', ['name' => '個室の有無', 'required' => false])
                                @include('components.form.edit.radio', ['name' => 'has_private_room', 'value' => $shop->has_private_room])
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                            </div>

                        </div>
                    </div>
                    <div class="px-4 py-3 text-center sm:px-10">
                        {{--                        <div class="px-4 py-3 bg-gray-50 text-center sm:px-10">--}}
                        <button type="submit" class="inline-flex justify-center py-3 px-10 border border-transparent shadow-sm text-sm font-medium rounded-md text-white font-semibold bg-blue-700 hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                onclick='return confirm("更新しますか？");'>
                            登録する
                            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{--    </div>--}}


</x-admin-layout>
