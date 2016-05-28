<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
        @yield('styles')
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

        @include('layouts.partials.footer')

        <!-- Scripts -->
        @yield('scripts')
    </body>
</html>