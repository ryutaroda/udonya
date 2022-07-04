<x-admin-layout>

    <div
        class="p-4 mb-0 sm:mb-4 w-full bg-white rounded-lg border shadow-sm sm:p-10 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex justify-between">
            <h5 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white">お問合せ一覧</h5>
        </div>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-auto">
            <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border dark:bg-gray-800 dark:border-gray-700">
            <tr>
                <th scope="col" class="px-6 py-4">
                    日時
                </th>
                <th scope="col" class="pl-6 pr-0 py-4">
                    form
                </th>
                <th scope="col" class="px-6 py-4">
                    件名
                </th>
                <th scope="col" class="px-6 py-4 w-1/2">
                    内容
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($inquiries as $inquiry)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">
                        {{ $inquiry->created_at  }}
                    </td>
                    <td class="pl-6 pr-0 py-4">
                        {{ $inquiry->name }} {{ $inquiry->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $inquiry->title }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $inquiry->contents }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
{{--    <div>--}}
{{--        {{ $inquiries->links('pagination::tailwind') }}--}}
{{--    </div>--}}

</x-admin-layout>
