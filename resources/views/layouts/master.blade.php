<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        @include('layouts.stylesheets')
        @yield('custom_stylesheets')
    </head>
    <body>
        @extends('layouts.menu')

        <div class="container grid-lg">
            @yield('content')
        </div>

        @include('layouts.footer')
        @yield('scripts')
    </body>
</html>
