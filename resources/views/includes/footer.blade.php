<section class="footer_section position-relative">
    <div>
        <div class="inner pt-4">
            <div class="row py-4">
                <div class="col-md-3 text-left">
                    <h6>PT SOKONINDO AUTOMOBILE</h6>
                    <p>
                        <i class="fa fa-map-marker mr-2"></i>Jl. Raya Industri Modern Cikande Kav. 30C Desa Barengkok, Serang, Banten 42186, Indonesia
                    </p>
                </div>
                <div class="col-md-6 footer_wrapper">
                    <h6 class="text-center">ABOUT US</h6>
                    <div class="row">
                        <div class="col-md-12  py-2 line">
                            <ul class="nav flex-column footer">
                                <li class="nav-item text-center">
                                    <a href="#">Glory 560</a>
                                </li>
                                <li class="nav-item text-center">
                                    <a href="#">Glory 580</a>
                                </li>
                                <li class="nav-item text-center">
                                    <a href="#">Super Cub</a>
                                </li>
                                <li class="nav-item text-center">
                                    <a href="#">Terms & Conditions</a>
                                </li>
                                <li class="nav-item text-center">
                                    <a href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="col-md-6 border-top border-bottom py-2 line">
                            <ul class="nav flex-column footer">
                                <li class="nav-item text-center">
                                    <a href="#">Terms & Conditions</a>
                                </li>
                                <li class="nav-item text-center">
                                    <a href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="row">
                        <ul class="nav justify-content-center w-100">
                            <li class="nav-item align-items-center">
                                Follow DFSK
                            </li>
                            <li class="nav-item">
                                <a href="https://www.facebook.com/DFSK-Motors-Indonesia-1684920538481095/" target="blank" class="nav-link follow-dfsk">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://twitter.com/dfsk_indonesia" target="blank" class="nav-link follow-dfsk">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://instagram.com/dfskindonesia" target="blank" class="nav-link follow-dfsk">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 text-right">
                    <h6>CONTACT US</h6>
                    <ul class="nav flex-column footer">
                        <li class="nav-item">
                            <i class="fa fa-phone mr-2"></i>0800 1666 999
                        </li>
                        <li class="nav-item">
                            <i class="fa fa-envelope mr-2"></i>sokonindo@sokon.cc
                        </li>
                    </ul>
                </div>
        
            </div>
        
        </div>
    </div>
    <div class="copyright">
        <p class="text-center mb-0 py-2">Copyright © 2019 PT Sokonindo Automobile. All Rights Reserved.</p>
    </div>
    
</section>

<!-- jQuery -->
<script src="{{ asset('js/jquery/jquery-3.2.1.min.js') }}"></script>

<!-- Owl Carousel JS -->
<script src="{{ asset('owlCarousel/dist/owl.carousel.min.js') }}"></script>

<!-- Paralax -->
<script src="{{ asset('js/parallax.js-1.5.0/parallax.min.js') }}"></script>

<!-- BX Slider -->
<script src="{{ asset('bxslider/dist/jquery.bxslider.min.js') }}"></script>

<!-- Bootstrap JS -->
<script src="{{ asset('js/bootstrap/4.0.0/bootstrap.min.js') }}"></script>

<script src={{ asset('js/main.js?v='.time()) }}></script>

@yield('homejs')
@yield('cardetailjs')