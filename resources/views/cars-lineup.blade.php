@extends('layouts.main')
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('assets/images/mitsubishi/cars-lineup.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ '/' }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Explore Cars <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Mitsubishi Lineup</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                @foreach ($data as $dt)
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end"
                                style="background-image: url(assets/images/mitsubishi/<?= $dt->path; ?>.jpg)">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="car-single.html"><?= $dt->name ?></a></h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">MItsubishi</span>
                                    <p class="price ml-auto"><?= number_format($dt->price, 2) ?><span></span></p>
                                </div>
                                <p class="d-flex mb-0 d-block">
                                    <a href="https://wa.me/6285607755527?text=Saya%20tertarik%20dengan%20mobil%20Mitsubishi%20 {{ $dt->name }},%20dan%20saya%20ingin%20bertanya%20lebih%20lanjut" class="btn btn-success py-2 mr-1"><i class="icon icon-whatsapp"></i> Konsultasi</a> <a href=" cars-details/<?= $dt->slug;?>" class="btn btn-secondary py-2 ml-1">Details</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
