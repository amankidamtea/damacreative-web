@extends('main.main')

@section('body')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form class="d-flex shadow">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn" type="submit" style="background: #F69F11;">Search</button>
                </form>
            </div>
        </div>

        <div class="row justify-content-center mb-5" style="margin-top: 50px">
            <div class="cover-banner shadow ">
                <div id="carouselExampleIndicators" class="d-flex align-items-center p-0 m-0 carousel slide"   data-bs-ride="carousel" style="height: 394px; width: 100%;">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="banner">
                                <img src="{{ asset('img/banner/1.avif') }}" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="banner">
                                <img src="{{ asset('img/banner/2.avif') }}" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="banner">
                                <img src="{{ asset('img/banner/3.avif') }}" class="d-block w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="mt-5 d-flex justify-content-between logo-header">
            <div class="d-flex col-md-6 justify-content-around mb-4">
                <div class="box">
                    <img src="{{ asset('img/produk/15.avif') }}" alt="">
                </div>
                <div class="box">
                    <img src="{{ asset('img/produk/16.avif') }}" alt="">
                </div>
            </div>
            <div class="d-flex col-md-6 justify-content-around mb-4">
                <div class="box">
                    <img src="{{ asset('img/produk/17.avif') }}" alt="">
                </div>
                <div class="box">
                    <img src="{{ asset('img/produk/18.avif') }}" alt="">
                </div>
            </div>
         </div>

       <h2>Semua Produk</h2>
       <div class="mt-5 mb-5 d-flex flex-column">
        <div class="produk">
            <div class="card-produk"><a href="/detail-produk"><img src="{{ asset('img/produk/11.avif') }}" alt=""></a></div>
            <div class="card-produk"><a href=""><img src="{{ asset('img/produk/12.avif') }}" alt=""></a></div>
            <div class="card-produk"><a href=""><img src="{{ asset('img/produk/13.avif') }}" alt=""></a></div>
            <div class="card-produk"><a href=""><img src="{{ asset('img/produk/14.avif') }}" alt=""></a></div>
        </div>
        <div class="produk">
            <div class="card-produk"><a href=""><img src="{{ asset('img/produk/15.avif') }}" alt=""></a></div>
            <div class="card-produk"><a href=""><img src="{{ asset('img/produk/16.avif') }}" alt=""></a></div>
            <div class="card-produk"><a href=""><img src="{{ asset('img/produk/10.avif') }}" alt=""></a></div>
            <div class="card-produk"><a href=""><img src="{{ asset('img/produk/9.avif') }}" alt=""></a></div>
        </div>

       </div>

    </div>
@endsection
