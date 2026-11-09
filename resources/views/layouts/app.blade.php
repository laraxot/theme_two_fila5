<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-cms::head />
    <body class="antialiased font-sans bg-base-100 text-base-content selection:bg-primary selection:text-primary-content">
        <x-section slug="header" />
        <main class="relative min-h-screen">
            {{ $slot }}
        </main>
<<<<<<< .merge_file_m5HIhw
        @livewire('notifications')
        <x-section slug="footer" />
        @livewireScripts
        @filamentScripts
=======
        <x-section slug="footer" />
        @livewireScripts
>>>>>>> .merge_file_iNrCCp
        @vite(['resources/js/app.js'], 'themes/Two')
    </body>
</html>
