@extends('main.main')

@section('body')
    <div class="container">
        <div class="d-flex justify-content-center mb-5">
            <div class="trending">
                <h1 class="position-absolute text-white" style="left: 170px; top: 100px">Gambar Trending</h1>
                <img src="{{ asset('img/trending/trending.avif') }}" alt="" class="trending-image">
            </div>
        </div>

        <div class="d-flex justify-content-between mb-5">
            <div class="d-flex col-md-4 shadow p-0 m-0">
                <ol class="list-group list-group col-md-8">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Subheading</div>
                        Cras justo odio
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Subheading</div>
                        Cras justo odio
                      </div>
                      <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Subheading</div>
                        Cras justo odio
                      </div>
                      <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Subheading</div>
                          Cras justo odio
                        </div>
                        <span class="badge bg-primary rounded-pill">14</span>
                      </li>
                  </ol>
            </div>
            <div class="d-flex col-md-4 shadow m-0 p-0">
                <ol class="list-group list-group col-md-8">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Subheading</div>
                        Cras justo odio
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Subheading</div>
                        Cras justo odio
                      </div>
                      <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Subheading</div>
                        Cras justo odio
                      </div>
                      <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Subheading</div>
                          Cras justo odio
                        </div>
                        <span class="badge bg-primary rounded-pill">14</span>
                      </li>
                  </ol>
            </div>
        </div>

        <h4>Potofolio Terbaru</h4>
        <div class="mt-5 d-flex justify-content-around logo-header">   
                <div class="box">
                    <img src="{{ asset('img/produk/15.avif') }}" alt="">
                </div>
                <div class="box">
                    <img src="{{ asset('img/produk/16.avif') }}" alt="">
                </div>
                <div class="box">
                    <img src="{{ asset('img/produk/16.avif') }}" alt="">
                </div>
         </div>
    </div>

  
@endsection