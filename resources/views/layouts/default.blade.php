<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('includes.head')
    </head>

<body>
    <div id="main">
        <!-- Scroll Up  -->
        <a class="scroll_to_top" href="#main" rel="nofollow" style="display: none;"></a>

        <!-- Fixed Short Cut Menu -->
        <div class="fixed-menu">
            <div class="fixed-menu__item">
                <a href="#" class="fixed-menu__link bg-dark">
                    <span class="fixed-menu__link-icon text-white"><i class="fa fa-car"></i></span>
                    <span class="fixed-menu__link-text">Book a test drive</span>
                </a>
            </div>
            <div class="fixed-menu__item">
                <a href="#" class="fixed-menu__link bg-dark">
                    <span class="fixed-menu__link-icon text-white"><i class="fa fa-handshake-o"></i></span>
                    <span class="fixed-menu__link-text">Become a dealer</span>
                </a>
            </div>
            <div class="fixed-menu__item">
                <a href="#" class="fixed-menu__link bg-dark">
                    <span class="fixed-menu__link-icon text-white"><i class="fa fa-wrench"></i></span>
                    <span class="fixed-menu__link-text">Book a service</span>
                </a>
            </div>
            <div class="fixed-menu__item">
                <a href="#" class="fixed-menu__link bg-dark">
                    <span class="fixed-menu__link-icon text-white"><i class="fa fa-envelope-o"></i></span>
                    <span class="fixed-menu__link-text">Contact Us</span>
                </a>
            </div>
        </div>

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