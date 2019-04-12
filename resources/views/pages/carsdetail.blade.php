@extends('layouts.default')

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
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex align-items-center">
                        <img class="d-block w-25" src={{ asset( "images/product/580/exterior/color_white.png") }} alt="Third slide">
                    </div>
                    <div class="text-uppercase d-flex align-items-center pt-4">
                        White
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center">
                        <img class="d-block w-25" src={{ asset( "images/product/580/exterior/color_cherry.png") }} alt="Fourth slide">
                    </div>
                    <div class="text-uppercase d-flex align-items-center pt-4">
                        Red
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="interior">

    </section>

    <section class="gallery mt-5">
        <div class="block-subtitle pt-4 pb-2">
            <h3>
                <div class="subtitle-title">GALLERY</div>
                <div class="subtitle-sub pt-1 text-secondary">GLORY 580</div>
            </h3>
        </div>
        <div class="row text-center pt-4">
            <div 
                class="col-md-3 list-gallery border text-uppercase font-weight-bold"
                style="background-image: url({{ asset('images/carsdetail/dfsk-detailcars-560.jpg') }})">
                <span>Exterior</span>
            </div>
            <div 
                class="col-md-3 list-gallery border text-uppercase font-weight-bold"
                style="background-image: url({{ asset('images/carsdetail/dfsk-detailcars-560.jpg') }})">
                <span>Interior</span>
            </div>
            <div class="col-md-3 list-gallery border text-uppercase font-weight-bold" style="background-image: url({{ asset('images/carsdetail/dfsk-detailcars-560.jpg') }})">
                <span>Video</span>
            </div>
            <div class="col-md-3 list-gallery border text-uppercase font-weight-bold" style="background-image: url({{ asset('images/carsdetail/dfsk-detailcars-560.jpg') }})">
                <span>Catalog</span>
            </div>
        </div>
    </section>

    <section class="specification mt-5">
        <div class="block-subtitle pt-4 pb-2">
            <h3>
                <div class="subtitle-title">SPESIFICATION</div>
                <div class="subtitle-sub pt-1 text-secondary">GLORY 580</div>
            </h3>
        </div>
    </section>
    
    
@stop