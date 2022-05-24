<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        @stack('meta')
        <title>@yield('title')</title>
        @stack('styles')
    </head>
    <body>
        <div id="app">
            @yield('app')
        </div>
        @stack('modals')
        @stack('scripts')
    </body>
</html>