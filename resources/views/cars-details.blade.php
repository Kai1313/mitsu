@extends('layouts.main')
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/assets/images/mitsubishi/{{ $details->slug; }}/bg1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="{{ '/' }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Car Details</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-car-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="car-details">
                        <div class="img rounded" style="background-image: url(/assets/images/mitsubishi/<?= $details->path;?>.jpg);"></div>
                        <div class="text text-center">
                            <span class="subheading">Mitsubishi</span>
                            <h2>{{ $details->detailsName; }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-pistons"></span></div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Transmission
                                        <span>{{ $details->transmission; }}</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-car-seat"></span></div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Seats
                                        <span>{{ $details->seater; }}</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-diesel"></span></div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Fuel
                                        <span>{{ $details->fuel; }}</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 pills">
                    <div class="bd-example bd-example-tabs">
                        <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                {{-- <li class="nav-item">
                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill"
                                        href="#pills-description" role="tab" aria-controls="pills-description"
                                        aria-expanded="true">Basic Features</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-manufacturer-tab" data-toggle="pill"
                                        href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer"
                                        aria-expanded="true">Description</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Key Features</a>
                                </li> --}}
                            </ul>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            {{-- <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                                aria-labelledby="pills-description-tab">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check"><span class="ion-ios-checkmark"></span>Airconditions
                                            </li>
                                            <li class="check"><span class="ion-ios-checkmark"></span>Child Seat
                                            </li>
                                            <li class="check"><span class="ion-ios-checkmark"></span>GPS</li>
                                            <li class="check"><span class="ion-ios-checkmark"></span>Luggage</li>
                                            <li class="check"><span class="ion-ios-checkmark"></span>Music</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check"><span class="ion-ios-checkmark"></span>Seat Belt</li>
                                            <li class="remove"><span class="ion-ios-close"></span>Sleeping Bed</li>
                                            <li class="check"><span class="ion-ios-checkmark"></span>Water</li>
                                            <li class="check"><span class="ion-ios-checkmark"></span>Bluetooth</li>
                                            <li class="remove"><span class="ion-ios-close"></span>Onboard computer
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check"><span class="ion-ios-checkmark"></span>Audio input
                                            </li>
                                            <li class="check"><span class="ion-ios-checkmark"></span>Long Term
                                                Trips</li>
                                            <li class="check"><span class="ion-ios-checkmark"></span>Car Kit</li>
                                            <li class="check"><span class="ion-ios-checkmark"></span>Remote
                                                central locking</li>
                                            <li class="check"><span class="ion-ios-checkmark"></span>Climate
                                                control</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="tab-pane fade show active" id="pills-manufacturer" role="tabpanel"
                                aria-labelledby="pills-manufacturer-tab">
                                <p class="mb-5"><?= $details->desc;?></p>
                                @foreach ($details->detailsSpecification as $ds => $values)
                                    <div class="mb-3">
                                        <h2>{{ strtoupper($ds) }}</h2>
                                        <div class="col-md-12">
                                            <div class="carousel-features owl-carousel">
                                                @foreach ($values as $value)
                                                    <div class="item row mb-3">
                                                        <div class="col-md-6">
                                                            <img src="/assets/images/mitsubishi/{{ $details->slug; }}/{{ $value[1] }}" alt="" class="img-fluid img-thumbnail">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><?= $value[0]; ?></p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{-- <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                                @foreach ($details->detailsSpecification as $ds => $values)
                                    <div class="mb-5">
                                        <h2>{{ strtoupper($ds) }}</h2>
                                        <div class="col-md-12">
                                            <div class="carousel-features owl-carousel">
                                                @foreach ($values as $value)
                                                    <div class="item row mb-3">
                                                        <div class="col-md-6">
                                                            <img src="/assets/images/mitsubishi/{{ $details->slug; }}/{{ $value[1] }}" alt="" class="img-fluid img-thumbnail">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><?= $value[0];?></p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Variants</span>
                    <h2 class="mb-2">Lineup</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($details->relatedDetails as $rd)
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end" style="background-image: url(/assets/images/mitsubishi/{{ $details->slug; }}/{{ $details->relatedPath; }});">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="#">{{ $rd[0] }}</a></h2>
                                {{-- <div class="d-flex mb-3">
                                    <span class="cat">Mulai</span>
                                    <p class="price ml-auto">{{ $rd[1] }} <span></span></p>
                                </div> --}}
                                <p class="d-flex mb-0 d-block">
                                    <a href="https://wa.me/6285607755527?text=Saya%20tertarik%20dengan%20mobil%20Mitsubishi%20 {{ $rd[0] }},%20dan%20saya%20ingin%20bertanya%20lebih%20lanjut" class="btn btn-success py-2 mr-1"><i class="icon icon-whatsapp"></i> Konsultasi</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
