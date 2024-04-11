<!DOCTYPE html>
<html class="h-full bg-gray-100"
      lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

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

    <div class="min-h-full">
        <header class="bg-indigo-600 pb-24"></header>
        <main class="-mt-12 pb-8">
            <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="grid grid-cols-1 items-start gap-4 lg:grid-cols-4 lg:gap-8">
                    <div class="lg:col-span-3">
                        <x-card>
                            {{ $slot }}
                        </x-card>
                    </div>
                    <div class="lg:col-span-1">
                        <x-card>
                            <livewire:layout.navigation />
                        </x-card>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="border-t border-gray-200 py-5 text-center text-xs text-gray-500 sm:text-end">
                    <span class="block sm:inline">
                        Project Base
                    </span>
                    <span class="block sm:inline">
                        Version 0.0.1A
                    </span>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
