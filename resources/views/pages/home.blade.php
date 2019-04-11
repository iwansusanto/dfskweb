@extends('layouts.default') 

@section('content') 

    <section class="bannerhome_section">
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
                <li data-target="#carouselIndicators" data-slide-to="3"></li>
                <li data-target="#carouselIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="d-block w-100" src={{ asset( "images/banner/dfsk-3.jpg") }} alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src={{ asset( "images/banner/dfsk-4.jpg") }} alt="Fourth slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src={{ asset( "images/banner/dfsk-5.jpg") }} alt="Five slide">
                </div>
                <div class="carousel-item active">
                    <img class="d-block w-100" src={{ asset( "images/banner/dfsk-6.jpg") }} alt="Six slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src={{ asset( "images/banner/dfsk-7.jpg") }} alt="Seven slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
    </section>

    <div class="container mt-5">
        {{-- <div class="block-subtitle pt-4 pb-2">
            <h3>
                <div class="subtitle-title">VEHICLES</div>
                <div class="subtitle-sub pt-1 text-secondary">TOP OF VEHICLES</div>
            </h3>
        </div> --}}
        <section class="slideitem_section pt-4">
            <div id="owl-slide" class="owl-carousel">
        
                <div class="item">
                    <a href={{ url('/cars/glory-580') }}>
                        <img class="owl-lazy" data-src={{ asset( "images/itemslide/thumb-dfsk-1.png") }} alt="Owl Image">
                        <p class="text-center pt-2 font-weight-bold">Glory 560</p>
                    </a>
                    
                </div>
                <div class="item">
                    <a href={{ url('/cars/glory-580') }}>
                        <img class="owl-lazy" data-src={{ asset( "images/itemslide/thumb-dfsk-1.png") }} alt="Owl Image">
                        <p class="text-center pt-2 font-weight-bold">Glory 580</p>
                    </a>
                </div>
                <div class="item">
                    <a href={{ url('/cars/glory-580') }}>
                        <img class="owl-lazy" data-src={{ asset( "images/itemslide/thumb-dfsk-1.png") }} alt="Owl Image">
                        <p class="text-center pt-2 font-weight-bold">Super Cub</p>
                    </a>
                </div>
            </div>
        </section>

    </div>
    <div class="container mt-5">
        {{-- <div class="block-subtitle pt-4 pb-2">
            <h3>
                <div class="subtitle-title">PROMO</div>
                <div class="subtitle-sub pt-1 text-secondary">SPECIAL FOR YOU</div>
            </h3>
        </div> --}}
        {{-- <div class="carousel-item active">
            <img class="d-block w-100" src={{ asset( "images/banner/dfsk-1.png") }} alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src={{ asset( "images/banner/dfsk-2.png") }} alt="Second slide">
        </div> --}}
        <div class="row mt-4">
            <div class="col-md-12">
                <img src={{ asset( "images/banner/dfsk-1.png") }} class="img-fluid" alt="Promo Banner">
            </div>
            {{-- <div class="col-md-3">
                <div class="card shortcut h-100">
                    <div class="text-center pt-4">
                        <i class="fa fa-car text-danger"></i>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title font-weight-bold text-center">BOOK A TEST DRIVE</h4>
                        <p class="card-text">
                            Hitung perkiraan ccicilan Anda.
                        </p>
                        <a href="#" class="btn btn-danger mt-auto">Start</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="container mt-5">
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card shortcut h-100">
                    <div class="text-center pt-4">
                        <i class="fa fa-map-marker text-danger"></i>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title font-weight-bold text-center">FIND A DEALER</h4>
                        <p class="card-text">
                            Kunjungi dealer terdekat kami untuk mencari tahu lebih jauh tentang mobil DFSK.
                        </p>
                        <a href="#" class="btn btn-danger mt-auto">Search</a>
                    </div>


                </div>
            </div>
            <div class="col-md-3">
                <div class="card shortcut h-100">
                    <div class="text-center pt-4">
                        <i class="fa fa-calculator text-danger"></i>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title font-weight-bold text-center">CREDIT SIMULATION</h4>
                        <p class="card-text">
                            Hitung perkiraan ccicilan Anda.
                        </p>
                        <a href="#" class="btn btn-danger mt-auto">Start</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shortcut h-100">
                    <div class="text-center pt-4">
                        <i class="fa fa-handshake-o text-danger"></i>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title font-weight-bold text-center">BECOME A DEALER</h4>
                        <p class="card-text">
                            Tertarik menjadi dealer mobil DFSK? Masukan alamat e-mail Anda di bawah ini untuk mendapatkan informasi selengkapnya.
                        </p>
                        <a href="#" class="btn btn-danger mt-auto">Submit</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shortcut h-100">
                    <div class="text-center pt-4">
                        <i class="fa fa-wrench text-danger"></i>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title font-weight-bold text-center">BOOK A SERVICE</h4>
                        <p class="card-text">
                            Sudah saatnya mobil DFSK Anda diservis? Masukan plat nomor kendaraan Anda di bawah ini.
                        </p>
                        <a href="#" class="btn btn-danger mt-auto">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        {{-- <div class="block-subtitle pt-4 pb-2">
            <h3>
                <div class="subtitle-title">NEWS & VIDEO</div>
                <div class="subtitle-sub pt-1 text-secondary">OUR ACTIVITY</div>
            </h3>
        </div> --}}
        <div class="row my-4">
            <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body px-0 py-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/q8uUkHdA7mw?rel=0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5>Grand Opening Dealer DFSK Depok Meriah</h5>
                        </div>
                    </div>
                
            </div>
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row card-body px-0 py-0">
                            <img class="col-sm-6" src="http://placehold.jp/80x50.png" alt="sans" />
                            <div class="col-sm-6 py-4">
                                <h5 class="card-title">Grand Opening Dealer DFSK Depok Meriah</h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row card-body px-0 py-0">
                            <img class="col-sm-6" src="http://placehold.jp/80x50.png" alt="sans" />
                            <div class="col-sm-6 py-4">
                                <h5 class="card-title">Grand Opening Dealer DFSK Depok Meriah</h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row card-body px-0 py-0">
                            <img class="col-sm-6" src="http://placehold.jp/80x50.png" alt="sans" />
                            <div class="col-sm-6 py-4">
                                <h5 class="card-title">Grand Opening Dealer DFSK Depok Meriah</h5>
                            </div>
                        </div>
                    </li>
                </ul>
            
            </div>
        </div>
    </div>
@stop