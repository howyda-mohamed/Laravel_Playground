<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        @include('admin.includes.style')
    </head>
    <body>
        <div class="dashboard-main-wrapper">
            @include('admin.includes.header')

            @include('admin.includes.sidebar')

            <div class="dashboard-wrapper">
                @yield('content')
            </div>

            @include('admin.includes.script')
        </div>
    </body>
</html>
