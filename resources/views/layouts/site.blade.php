<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('site.includes.style')
    </head>
    <body>
        @include('site.includes.header')

        @yield('content')

        @include('site.includes.footer')

        @include('site.includes.script')
    </body>
</html>
