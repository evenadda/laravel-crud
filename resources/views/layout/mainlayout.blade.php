<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layout.partials.head')
        </style>
    </head>
    <body>
        @include('layout.partials.nav')

        @yield('content')

        @include('layout.partials.footer')
    </body>
</html>
