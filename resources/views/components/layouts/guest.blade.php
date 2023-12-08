<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
        >

        <title>{{ $title ?? 'Page Title' }}</title>

        <style>
            [x-cloak] {
                display: none;
            }
        </style>

        <tallstackui:script />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans text-gray-900 antialiased">
        <div class="flex min-h-screen flex-col items-center bg-gray-100 pt-6 sm:justify-center sm:pt-0">
            <div class="w-full overflow-hidden px-6 py-4 sm:max-w-md">
                <x-card>
                    {{ $slot }}
                </x-card>
            </div>
        </div>
    </body>

</html>
