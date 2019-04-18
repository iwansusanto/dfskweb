@extends('layouts.default')

@section('cardetailcss')
    <link rel="stylesheet" href={{ asset( "fancybox/dist/jquery.fancybox.min.css") }}>
    <link rel="stylesheet" href={{ asset( "css/cardetail.css?v=".time()) }}> 
@stop

@section('content')
    <section class="bannerdetail">
        <div class="detailcar" style="background-image: url({{ asset('images/carsdetail/dfsk-detailcars-560.jpg') }})">
            <div class="wrapper-highlight w-25 py-2">
                <h1 class="title-highlight">Glory 580</h1>
                <span class="desc-highlight">7 Seats City SUV</span>
            </div>
        </div>
    </section>

    <section class="exterior mt-5">
        <div class="block-subtitle pt-4 pb-2 mb-4">
            <h3>
                <div class="subtitle-title">EXTERIOR</div>
                <div class="subtitle-sub pt-1 text-secondary">GLORY 580</div>
            </h3>
        </div>
        <div id="carouselColorCar" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#carouselColorCar" data-slide-to="0" class="active" style="background-color: #ffffff"></li>
                <li data-target="#carouselColorCar" data-slide-to="1" style="background-color: #d90000"></li>
                <li data-target="#carouselColorCar" data-slide-to="2" style="background-color: #555555"></li>
                <li data-target="#carouselColorCar" data-slide-to="3" style="background-color: #000000"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex align-items-center">
                        <img class="d-block car-color" src={{ asset( "images/product/580/color/white.png") }} alt="Third slide">
                    </div>
                    <div class="text-uppercase d-flex align-items-center pt-4">
                        White
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center">
                        <img class="d-block car-color" src={{ asset( "images/product/580/color/red.png") }} alt="Fourth slide">
                    </div>
                    <div class="text-uppercase d-flex align-items-center pt-4">
                        Red
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center">
                        <img class="d-block car-color" src={{ asset( "images/product/580/color/grey.png") }} alt="Fourth slide">
                    </div>
                    <div class="text-uppercase d-flex align-items-center pt-4">
                        Red
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center">
                        <img class="d-block car-color" src={{ asset( "images/product/580/color/black.png") }} alt="Fourth slide">
                    </div>
                    <div class="text-uppercase d-flex align-items-center pt-4">
                        Red
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="wrapeper_interior">
        <section class="interior pt-5 bg-white">
            <div class="block-subtitle pt-4 pb-2 mb-4">
                <h3>
                    <div class="subtitle-title">INTERIOR</div>
                    <div class="subtitle-sub pt-1 text-secondary">GLORY 580</div>
                </h3>
            </div>
        
            <div class="interior-slide">
                <div class="slider">
                    <div class="d-flex align-items-center" style="background-size: cover;background-repeat: no-repeat; height: 836px;background-image: url({{ asset('images/product/580/interior/test.jpg') }})"></div>
                    <div class="d-flex align-items-center" style="background-size: cover;background-repeat: no-repeat; height: 836px;background-image: url({{ asset('images/product/580/interior/test-1.jpg') }})"></div>
                    <div class="d-flex align-items-center" style="background-size: cover;background-repeat: no-repeat; height: 836px;background-image: url({{ asset('images/product/580/interior/test-2.jpg') }})"></div>
                    <div class="d-flex align-items-center" style="background-size: cover;background-repeat: no-repeat; height: 836px;background-image: url({{ asset('images/product/580/interior/test-3.jpg') }})"></div>
                    <div class="d-flex align-items-center" style="background-size: cover;background-repeat: no-repeat; height: 836px;background-image: url({{ asset('images/product/580/interior/test-4.jpg') }})"></div>
                    <div class="d-flex align-items-center" style="background-size: cover;background-repeat: no-repeat; height: 836px;background-image: url({{ asset('images/product/580/interior/test-5.jpg') }})"></div>
                    <div class="d-flex align-items-center" style="background-size: cover;background-repeat: no-repeat; height: 836px;background-image: url({{ asset('images/product/580/interior/test-6.jpg') }})"></div>
                    <div class="d-flex align-items-center" style="background-size: cover;background-repeat: no-repeat; height: 836px;background-image: url({{ asset('images/product/580/interior/test-7.jpg') }})"></div>
                    {{-- <img class="" src={{ asset( "images/product/580/interior/1.jpg") }} alt="Owl Image">
                    <img class="" src={{ asset( "images/product/580/interior/2.1.jpg") }} alt="Owl Image"> --}}
                </div>
            </div>
        
        </section>
    </div>

    <section class="gallery pt-5 position-relative bg-white">
        <div class="block-subtitle pt-4 pb-2">
            <h3>
                <div class="subtitle-title">GALLERY</div>
                <div class="subtitle-sub pt-1 text-secondary">GLORY 580</div>
            </h3>
        </div>
        @include('pages.sectiondetail.gallery')
    </section>

    <section class="specification pt-5 position-relative bg-white">
        <div class="block-subtitle pt-4 pb-2">
            <h3>
                <div class="subtitle-title">SPESIFICATIONS</div>
                <div class="subtitle-sub pt-1 text-secondary">GLORY 580</div>
            </h3>
        </div>
        @include('pages.sectiondetail.spesification')
    </section>
    
    
@stop

@section('cardetailjs')
    <script src="{{ asset('fancybox/dist/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/cardetail.js?v='.time()) }}"></script>
@stop