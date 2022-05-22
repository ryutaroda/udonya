<x-admin-layout>

    <div
        class="p-4 mb-0 sm:mb-4 w-full bg-white rounded-lg border shadow-sm sm:p-10 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex justify-between">
            <h5 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white">「{{ $shop->name }}」で食べたうどん一覧</h5>
            <a href="{{ route('admin.shop_menu.create', $shop) }}" class="inline-flex justify-center shadow-lg py-3 px-8 border border-transparent shadow-sm text-sm font-medium rounded-md text-white font-semibold bg-blue-700 hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                食べたうどんを登録する
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
        <p class="text-xs leading-snug">
            うどん屋の登録をお願いします。<br>
            入力項目が多数あるので、不明な箇所は未入力のままでも登録できます。
        </p>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-auto">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border dark:bg-gray-800 dark:border-gray-700">
            <tr>
                <th scope="col" class="pl-6 pr-0 py-4">
                    ID
                </th>
                <th scope="col" class="px-6 py-4">
                    うどん名
                </th>
                <th scope="col" class="px-6 py-4">
                    値段
                </th>
                <th scope="col" class="px-6 py-4">
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($shop_menus as $shop_menu)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="pl-6 pr-0 py-4">
                        {{ $shop_menu->id }}
                    </td>
                    <td class="pl-6 pr-0 py-4">
                        {{ $shop_menu->name }}
                    </td>
                    <td class="pl-6 pr-0 py-4">
                        {{ $shop_menu->price }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.shop_menu.edit', [$shop, $shop_menu]) }}" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">情報修正</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</x-admin-layout>
