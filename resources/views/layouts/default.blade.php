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
        <div class="fixed-menu fixed r0">
            <div class="fixed-menu__item"><a href="/test_drive#model=x60" class="fixed-menu__link"><span class="fixed-menu__link-icon fixed-menu__link-icon-wheel"></span><span class="fixed-menu__link-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sign up for a test drive</font></font></span></a></div>
            <div class="fixed-menu__item"><a data-toggle="form-popup" data-model="x60" href="/request_credit" class="fixed-menu__link"><span class="fixed-menu__link-icon fixed-menu__link-icon-percentage"></span><span class="fixed-menu__link-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Calculate loan</font></font></span></a></div>
            <!--<div class="fixed-menu__item"><a data-toggle="window-popup" data-id="#dlg_cap" href="/calc/estimate" class="fixed-menu__link"><span class="fixed-menu__link-icon fixed-menu__link-icon-calc"></span><span class="fixed-menu__link-text">Оценить автомобиль</span></a></div>-->
            <div class="fixed-menu__item"><a data-toggle="form-popup" data-model="x60" href="/request_service" class="fixed-menu__link"><span class="fixed-menu__link-icon fixed-menu__link-icon-wrench"></span><span class="fixed-menu__link-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sign up for a service</font></font></span></a></div>
            <div class="fixed-menu__item"><a href="/company/feedback" class="fixed-menu__link"><span class="fixed-menu__link-icon fixed-menu__link-icon-email"></span><span class="fixed-menu__link-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Feedback</font></font></span></a></div>
            <!--<div class="fixed-menu__item"><a data-toggle="window-popup" data-id="#dlg_cap" href="/buyers/shop" class="fixed-menu__link"><span class="fixed-menu__link-icon fixed-menu__link-icon-car"></span><span class="fixed-menu__link-text">Купить онлайн</span></a></div>-->
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