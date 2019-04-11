<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('includes.head')
    </head>

<body>
    <div class="main">
        
        @include('includes.header')

        <div class="content">

            @yield('content')

            <footer class="links">
                @include('includes.footer')
            </footer>
        </div>
    </div>
</body>

</html>