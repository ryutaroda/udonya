<x-app-layout>
    <div class="p-4 mb-4 w-full text-center bg-white rounded-lg border shadow-sm sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">{{ $title }}</h5>
        <a href="{{ $url }}" class="mb-5 text-base text-blue-400 sm:text-lg dark:text-gray-400 underline">{{ $url }}</a>
    </div>
    <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
        <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
    </div>
    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
        <span class="font-medium">Danger alert!</span> Change a few things up and try submitting again.
    </div>
    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
         role="alert">
        <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
    </div>
    <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800"
         role="alert">
        <span class="font-medium">Warning alert!</span> Change a few things up and try submitting again.
    </div>
    <div class="p-4 text-sm text-gray-700 bg-gray-100 rounded-lg dark:bg-gray-700 dark:text-gray-300" role="alert">
        <span class="font-medium">Dark alert!</span> Change a few things up and try submitting again.
    </div>
</x-app-layout>
