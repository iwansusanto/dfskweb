<nav class="navbar navbar-expand-lg navbar-main bg-main">
    <!-- Brand -->
    <a class="navbar-brand" href={{ url('/') }}>
        <div class="logo-box py-4 px-2 d-none d-lg-block">
            <img id="logo" alt="Logo" src={{ asset( 'images/global/logo-dfsk.png') }} width="215" height="185">
        </div>
        <div class="d-lg-none .d-md-block">
            <img id="logo" alt="Logo" src={{ asset( 'images/global/logo-dfsk.png') }} width="40" height="30">
        </div>
    </a>

    <!-- Toggler/collapsibe Button -->
    <button 
        class="navbar-toggler btn-menu-mobile" 
        type="button" 
        data-toggle="collapse" 
        data-target="#navbarNavCollapse" 
        aria-controls="navbarNavCollapse"
        aria-expanded="false" 
        aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Navbar links For Mobile-->
    <div class="collapse navbar-collapse overlay w-100 position-absolute bg-white mobile-menu" id="navbarNavCollapse">
        <ul class="navbar-nav mr-auto px-3">
            <li class="nav-item active d-none d-lg-block">
                <a class="nav-link" 
                    data-toggle="collapse" 
                    href="#collapseSupport" 
                    role="button" 
                    aria-expanded="false" 
                    aria-controls="collapseSupport">&nbsp;&nbsp;&nbsp;SUPPORT 
                    <span class="sr-only">(current)</span>
                    &nbsp;&nbsp;&nbsp;0800 1666 999 <i class="fa fa-chevron-down"></i></a>
                <div class="collapse collapseSupport" id="collapseSupport">
                    <div class="card card-body rounded-0 border-0">
                        <div class="collapse-down">
                            &nbsp;SUPPORT  <span class="fa fa-chevron-up"></span>
                        </div>
                        <div class="callsupportCollapse font-weight-bold py-4">
                            0800 1666 999
                        </div>
                    </div>
                </div>    
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link float-left mr-2">
                    <img src={{ asset( 'images/global/lang-in.png') }} alt="Indonesia">
                </a>
                <a href="#" class="nav-link float-left">
                    <img src={{ asset( 'images/global/lang-en.png') }} alt="Indonesia">
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto d-lg-none px-3 mobile-list-menu">
            <li class="nav-item border-bottom py-1">
                <a class="nav-link font-weight-bold" href="#">ABOUT US</a>
            </li>
            <li class="nav-item border-bottom py-1">
                <a class="nav-link font-weight-bold" data-toggle="collapse" href="#collapseMenuMobile" role="button" aria-expanded="false" aria-controls="collapseMenuMobile">
                    VEHICLES
                    <i class="fa fa-chevron-down float-right"></i>
                </a>
                <div class="collapse" id="collapseMenuMobile">
                    <ul class="menuMobileList py-4 px-0">
                        <li class="border-left pl-4 mb-4">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td class="align-middle border-0">
                                            <h6 class="font-weight-bold text-uppercase">Glory 580</h6>
                                            <span class="text-danger font-weight-bold">Start from Rp. 245,900,000</span>
                                        </td>
                                        <td class="float-right text-right border-0">
                                            <img class="w-50" src={{ asset( '/images/product/580/default.png') }} alt="">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                        <li class="border-left pl-4 mb-4">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td class="align-middle border-0">
                                            <h6 class="font-weight-bold text-uppercase">Glory 560</h6>
                                            <span class="text-danger font-weight-bold">Start from Rp. 245,900,000</span>
                                        </td>
                                        <td class="float-right text-right border-0">
                                            <img class="w-50" src={{ asset( '/images/product/580/color/red.png') }} alt="">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                        <li class="border-left pl-4">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td class="align-middle border-0">
                                            <h6 class="font-weight-bold text-uppercase">Super Cab</h6>
                                            <span class="text-danger font-weight-bold">Start from Rp. 245,900,000</span>
                                        </td>
                                        <td class="float-right text-right border-0">
                                            <img class="w-50" src={{ asset( '/images/product/supercab/default.png') }} alt="">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item border-bottom py-1">
                <a class="nav-link font-weight-bold" href="#">SERVICES</a>
            </li>
            <li class="nav-item border-bottom py-1">
                <a class="nav-link font-weight-bold" href="#">NEWS & EVENTS</a>
            </li>
            <li class="nav-item border-bottom py-1">
                <a class="nav-link font-weight-bold" href="#">CAREERS</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto d-lg-none px-3 menu-aside">
            <li class="nav-item py-3">
                <a href="#" class="text-uppercase font-weight-bold">
                    <i class="fa fa-car pr-2"></i>
                    Book a test drive
                </a>
            </li>
            <li class="nav-item py-3">
                <a href="#" class="text-uppercase font-weight-bold">
                    <i class="fa fa-handshake-o pr-2"></i>
                    Become a dealer
                </a>
            </li>
            <li class="nav-item py-3">
                <a href="#" class="text-uppercase font-weight-bold">
                    <i class="fa fa-wrench pr-2"></i>
                    Book a service
                </a>
            </li>
            <li class="nav-item py-3">
                <a href="#" class="text-uppercase font-weight-bold">
                    <i class="fa fa-envelope-o pr-2"></i>
                    Contact us
                </a>
            </li>

        </ul>
    </div>
</nav>

<div class="menu-main d-none d-lg-block">
    <nav class="navbar navbar-expand-md navbar-main bg-main">
        <!-- Navbar links -->
        <div class="collapse navbar-collapse position-relative" id="navbarNavCollapse">
            <ul class="navbar-nav ml-auto position-relative megamenu">
                <li class="nav-item">
                    <a class="nav-link text-white border-right px-4" href="#">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white border-right px-4" href="#">VEHICLES</a>
                    <ul class="position-absolute megamenu-child py-4">
                        <li class="border-left pl-4 mb-4">
                            <div class="row">
                                <div class="col-md-6 my-auto">
                                    <h6 class="font-weight-bold text-uppercase">Glory 580</h6>
                                    <span class="text-danger font-weight-bold">Start from Rp. 245,900,000</span>
                                </div>
                                <div class="col-md-6">
                                    <img class="w-50" src={{ asset( '/images/product/580/default.png') }} alt="">
                                </div>
                            </div>
                        </li>
                        <li class="border-left pl-4 mb-4">
                            <div class="row">
                                <div class="col-md-6 my-auto">
                                    <h6 class="font-weight-bold text-uppercase">Glory 560</h6>
                                    <span class="text-danger font-weight-bold">Start from Rp. 245,900,000</span>
                                </div>
                                <div class="col-md-6">
                                    <img class="w-50" src={{ asset( '/images/product/580/color/red.png') }} alt="">
                                </div>
                            </div>
                        </li>
                        <li class="border-left pl-4">
                            <div class="row">
                                <div class="col-md-6 my-auto">
                                    <h6 class="font-weight-bold text-uppercase">Super Cab</h6>
                                    <span class="text-danger font-weight-bold">Start from Rp. 245,900,000</span>
                                </div>
                                <div class="col-md-6">
                                    <img class="w-50" src={{ asset( '/images/product/supercab/default.png') }} alt="">
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white border-right px-4" href="#">SERVICES</a>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white border-right px-4" href="#">NEWS & EVENTS</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link text-white" href="#">CAREERS</a>
                </li>
            </ul>
        </div>
    </nav>
</div>



