<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-cms::head />
    <body>
        @yield('body')
<<<<<<< .merge_file_MyealL
        @livewire('notifications')
        @livewireScripts
        @filamentScripts
=======
        @livewireScripts
        {{-- Widget Filament (auth): servono gli Alpine data provider Filament
            (filamentSchema, passwordRevealFormComponent) — @filamentScripts(withCore: true)
            è la via documentata, come nel layout del panel. --}}
        @filamentScripts(withCore: true)
>>>>>>> .merge_file_TZoZtK
        @vite(['resources/js/app.js'], 'themes/Two')
    </body>
</html>
