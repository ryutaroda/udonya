<x-app-layout>
    <div class="p-4 mb-4 w-full text-center bg-white rounded-lg border shadow-sm sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">{{ $title }}</h5>
        <a href="{{ $url }}" class="mb-5 text-base text-blue-400 sm:text-lg dark:text-gray-400 underline">{{ $url }}</a>
    </div>


    <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="Rounded avatar">
    <img class="w-10 h-10 rounded" src="/docs/images/people/profile-picture-5.jpg" alt="Default avatar">


    <img class="w-10 h-10 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500" src="/docs/images/people/profile-picture-5.jpg" alt="Bordered avatar">


    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
    </div>


    <div class="relative">
        <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="">
        <span class="top-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
    </div>
    <div class="relative">
        <img class="w-10 h-10 rounded" src="/docs/images/people/profile-picture-5.jpg" alt="">
        <span class="absolute top-0 left-8 transform -translate-y-1/2 w-3.5 h-3.5 bg-red-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
    </div>
    <div class="relative">
        <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="">
        <span class="bottom-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
    </div>
    <div class="relative">
        <img class="w-10 h-10 rounded" src="/docs/images/people/profile-picture-5.jpg" alt="">
        <span class="absolute bottom-0 left-8 transform translate-y-1/4 w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
    </div>


    <div class="flex mb-5 -space-x-4">
        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/docs/images/people/profile-picture-5.jpg" alt="">
        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/docs/images/people/profile-picture-2.jpg" alt="">
        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/docs/images/people/profile-picture-3.jpg" alt="">
        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/docs/images/people/profile-picture-4.jpg" alt="">
    </div>
    <div class="flex -space-x-4">
        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/docs/images/people/profile-picture-5.jpg" alt="">
        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/docs/images/people/profile-picture-2.jpg" alt="">
        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/docs/images/people/profile-picture-3.jpg" alt="">
        <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+99</a>
    </div>


    <div class="flex items-center space-x-4">
        <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="">
        <div class="space-y-1 font-medium dark:text-white">
            <div>Jese Leos</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">Joined in August 2014</div>
        </div>
    </div>


    <img id="avatar" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="/docs/images/people/profile-picture-5.jpg" alt="User dropdown">
    <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top-start" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(265px, 2995px, 0px);">
        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
            <div>Bonnie Green</div>
            <div class="font-medium truncate">name@flowbite.com</div>
        </div>
        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
            </li>
        </ul>
        <div class="py-1">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
        </div>
    </div>


    <img class="w-6 h-6 rounded" src="/docs/images/people/profile-picture-5.jpg" alt="Extra small avatar">
    <img class="w-8 h-8 rounded" src="/docs/images/people/profile-picture-5.jpg" alt="Small avatar">
    <img class="w-10 h-10 rounded" src="/docs/images/people/profile-picture-5.jpg" alt="Medium avatar">
    <img class="w-20 h-20 rounded" src="/docs/images/people/profile-picture-5.jpg" alt="Large avatar">
    <img class="rounded w-36 h-36" src="/docs/images/people/profile-picture-5.jpg" alt="Extra large avatar">



</x-app-layout>
