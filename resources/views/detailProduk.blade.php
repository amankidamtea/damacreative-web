@extends('main.main')

@section('body')
    <div class="container">
        <div class="detail-box shadow">
            <div class="img">
                <img src="{{ asset('img/produk/1.avif') }}" alt="">
            </div>
            <div class="ket ms-5">
                <h1>Judul Desain</h1>
                <h3>Keterangan</h3>
                <p><i class="bi bi-check-circle"></i> Format Pdf</p>
                <p><i class="bi bi-check-circle"></i> Unlimited</p>
                <p><i class="bi bi-check-circle"></i> Exclusive</p>
                <h3 class="mt-2">Harga</h3>
                <p>Rp.200.000</p>
                <a href="" class="btn btn-primary">Download</a>
            </div>
        </div>

        <div class="mt-4 mb-4">
            <h2>Desain Lainnya</h2>
            <div class="produk">
                <div class="card-produk"><a href="/detail-produk"><img src="{{ asset('img/produk/11.avif') }}" alt=""></a></div>
                <div class="card-produk"><a href=""><img src="{{ asset('img/produk/12.avif') }}" alt=""></a></div>
                <div class="card-produk"><a href=""><img src="{{ asset('img/produk/13.avif') }}" alt=""></a></div>
                <div class="card-produk"><a href=""><img src="{{ asset('img/produk/14.avif') }}" alt=""></a></div>
            </div>
        </div>
    </div>
@endsection