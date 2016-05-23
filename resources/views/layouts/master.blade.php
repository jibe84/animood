<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

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