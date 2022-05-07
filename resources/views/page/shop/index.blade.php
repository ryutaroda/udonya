<x-site-layout>

    <div class="py-5 px-5">
        <form action="{{ route('page.shop.index') }}" method="GET">
            @csrf
            <div class="flex">
                <div class="relative w-full mx-auto shadow">
                    <input type="search" id="search-dropdown" style="width: 300px"
                           name="search_word"
                           value="{{ $searchWord }}"
                           class="block p-4 w-full z-20 text-sm text-gray-900 bg-gray-50 border-none rounded-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                           placeholder="店名・エリア・キーワード" required>
                    <button onclick="location.href='/search'" type="submit" name="word_search"
                            class="absolute top-0 right-0 py-4 px-10 text-sm font-medium text-white bg-gray-800 border-none rounded-r-lg border border-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        検　索
                    </button>
                </div>
            </div>
{{--            <div class="mt-5">--}}
{{--                <a onclick="location.href='/search'" type="submit"--}}
{{--                   class="w-full py-4 px-10 text-sm text-center font-medium text-white bg-gray-800 border-none rounded-lg border border-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
{{--                    現地から探す--}}
{{--                </a>--}}
{{--            </div>--}}
        </form>
    </div>


    <div class="relative overflow-x-auto sm:rounded-lg px-5">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-auto">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border dark:bg-gray-800 dark:border-gray-700">
            <tr>
                <th scope="col" class="pl-6 pr-0 py-4">
                    ID
                </th>
                <th scope="col" class="px-6 py-4 w-1/2">
                    店名
                </th>
                <th scope="col" class="px-6 py-4">
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($shops as $shop)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="pl-6 pr-0 py-4">
                        {{ $shop->id }}
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap w-1/2">
                        <div class="flex items-center space-x-4">
                            <img class="w-10 h-10 rounded-full" src="" alt="">
                            <div class="space-y-1 font-medium dark:text-white">
                                <div>{{ $shop->name }}</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">{{ $shop->post_code }}{{ ' ' }}{{ $shop->prefecture->name }}{{ ' ' }}{{ $shop->address1 }}{{ $shop->address2 }}{{ $shop->address3 }}</div>
                            </div>
                        </div>
                    </th>
                    <td class="px-6 py-4 text-right">
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="py-5 px-5">
        {{ $shops->links('pagination::tailwind') }}
    </div>

</x-site-layout>
