<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Sijunjung') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        @stack('styles')
    </head>
    <body class="font-sans antialiased overflow-y-hidden">
        <div class="flex h-screen bg-gray-100 overflow-y-auto">
            <div class="flex flex-col flex-1 overflow-x-hidden">
                <x-header.nav title=""></x-header.nav>
                <main class="h-full overflow-y-auto pt-4">
                    <div class="lg:container mb-6 px-2 md:px-4 lg:px-8 mx-auto">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>

        @livewire('livewire-ui-modal')

        @livewireScripts
            <script src="{{ mix('js/livewire-handler.js') }}" defer></script>
        @stack('scripts')
        @livewireChartsScripts
    </body>
</html>
