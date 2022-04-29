<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')



            <!-- Page Content -->
            <main>
                <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8  md:grid md:grid-cols-9 md:gap-6">
                    <div class="md:col-span-2">
                        @include('layouts.sampleMenuSidebar')
                    </div>
                    <div class="md:col-span-7">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
        <script src="https://unpkg.com/flowbite@1.4.3/dist/flowbite.js"></script>
    </body>
</html>
