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
        <link rel="stylesheet" href="{{ asset('css/admin/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            @include('layouts.header')

            <div class="max-w-5xl mx-auto">
                @include('components.parts.alert')
            </div>

            <!-- Page Content -->
            <main class="max-w-5xl mx-auto">

                <div class="py-4 px-4 sm:px-6 lg:px-8  md:grid md:grid-cols-9 md:gap-6">
                    <div class="md:col-span-9">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>

        @include('layouts.footer')

        <script src="https://unpkg.com/flowbite@1.4.3/dist/flowbite.js"></script>
    </body>
</html>
