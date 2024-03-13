<!DOCTYPE html>
<html
    class="bg-gray-100 dark:bg-gray-800"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
>

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

    <body>
        {{ $slot }}
    </body>

</html>
