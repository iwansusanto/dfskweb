<div class="container-fluid" id="accordion-gallery">
    <div class="row text-center pt-4">
        <a 
        data-toggle="collapse" href="#collapseExterior" aria-expanded="false" aria-controls="collapseExterior"
        class="col-3 list-gallery border text-uppercase font-weight-bold" style="background-image: url({{ asset('images/carsdetail/dfsk-detailcars-560.jpg') }})">
            <span>
                Exterior
            </span>
        </a>
        <a data-toggle="collapse" href="#collapseInterior" aria-expanded="false" aria-controls="collapseInterior" class="col-3 list-gallery border text-uppercase font-weight-bold"
            style="background-image: url({{ asset('images/carsdetail/dfsk-detailcars-560.jpg') }})">
            <span>
                Interior
            </span>
        </a>
        <div class="col-3 list-gallery border text-uppercase font-weight-bold" style="background-image: url({{ asset('images/carsdetail/dfsk-detailcars-560.jpg') }})">
            <span>Video</span>
        </div>
        <div class="col-3 list-gallery border text-uppercase font-weight-bold" style="background-image: url({{ asset('images/carsdetail/dfsk-detailcars-560.jpg') }})">
            <span>Catalog</span>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-md-12 exterior collapse" id="collapseExterior" data-parent="#accordion-gallery">
            <div class="inner">
                <div class="row">
                    <div class="gallery-image" style="background-image: url({{ asset('images/product/580/exterior/2.jpg') }});">
                        <a href={{ asset( 'images/product/580/exterior/2.jpg') }} data-fancybox="gallery-image"></a>
                    </div>
                    <div class="gallery-image" style="background-image: url({{ asset('images/product/580/exterior/3.jpg') }});">
                        <a href={{ asset( 'images/product/580/exterior/3.jpg') }} data-fancybox="gallery-image"></a>
                    </div>
                    <div class="gallery-image" style="background-image: url({{ asset('images/product/580/exterior/4.jpg') }});">
                        <a href={{ asset( 'images/product/580/exterior/4.jpg') }} data-fancybox="gallery-image"></a>
                    </div>
                    <div class="gallery-image" style="background-image: url({{ asset('images/product/580/exterior/5.jpg') }});">
                        <a href={{ asset( 'images/product/580/exterior/5.jpg') }} data-fancybox="gallery-image"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 interior collapse" id="collapseInterior" data-parent="#accordion-gallery">
            <div class="inner">
                <div class="row">
                    <div class="gallery-image" style="background-image: url({{ asset('images/product/580/interior/1.jpg') }});">
                        <a href={{ asset( 'images/product/580/interior/1.jpg') }} data-fancybox="gallery-image"></a>
                    </div>
                    <div class="gallery-image" style="background-image: url({{ asset('images/product/580/interior/2.jpg') }});">
                        <a href={{ asset( 'images/product/580/interior/2.jpg') }} data-fancybox="gallery-image"></a>
                    </div>
                    <div class="gallery-image" style="background-image: url({{ asset('images/product/580/interior/3.jpg') }});">
                        <a href={{ asset( 'images/product/580/interior/3.jpg') }} data-fancybox="gallery-image"></a>
                    </div>
                    <div class="gallery-image" style="background-image: url({{ asset('images/product/580/interior/4.jpg') }});">
                        <a href={{ asset( 'images/product/580/interior/4.jpg') }} data-fancybox="gallery-image"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <a data-toggle="collapse" href="#collapseExterior" aria-expanded="false" aria-controls="collapseExterior">
        Exterior
    </a>
    <div id="collapseExterior" class="collapse" data-parent="#accordion-gallery" aria-labelledby="headingOne">
        <div class="col-md-12 interior">
            <div class="inner">
                <div class="row">
                    <div class="gallery-image" style="background-image: url({{ asset('images/product/580/interior/1.jpg') }});">
                        <a href={{ asset( 'images/product/580/interior/1.jpg') }} data-fancybox="gallery-image"></a>
                    </div>
                    <div class="gallery-image" style="background-image: url({{ asset('images/product/580/interior/2.jpg') }});">
                        <a href={{ asset( 'images/product/580/interior/2.jpg') }} data-fancybox="gallery-image"></a>
                    </div>
                    <div class="gallery-image" style="background-image: url({{ asset('images/product/580/interior/3.jpg') }});">
                        <a href={{ asset( 'images/product/580/interior/3.jpg') }} data-fancybox="gallery-image"></a>
                    </div>
                    <div class="gallery-image" style="background-image: url({{ asset('images/product/580/interior/4.jpg') }});">
                        <a href={{ asset( 'images/product/580/interior/4.jpg') }} data-fancybox="gallery-image"></a>
                    </div>
                </div>
            </div>
        </div>
    
    </div> --}}
</div>