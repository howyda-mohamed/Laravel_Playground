<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        @include('owner.includes.style')
    </head>
    <body>
        <div class="dashboard-main-wrapper">
            @include('owner.includes.header')

            @include('owner.includes.sidebar')

            <div class="dashboard-wrapper">
                @yield('content')
            </div>

            @include('owner.includes.script')
        </div>
    </body>
</html>
