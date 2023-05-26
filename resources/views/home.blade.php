@extends('main.main')

@section('body')

     {{-- header --}}
     <header class="bg-white pb-4">
         <div class="container">
             <div class="row shadow justify-content-around py-5">
                 <div class="col-md-4 img-header">
                     <img height="400" src="img/ilustrasi.svg" alt="">
                 </div>
                 <div class="col-md-4 p-4">
                     <h2>Cari Desain Anda <br><span>di Dama Creative Aja</span></h2>
                     <p>kami berusaha yang terbaik untuk anda</p>
                     <form class="d-flex p-2 shadow-lg">
                         <input class="form-control me-2" type="search" placeholder="Search.." aria-label="Search">
                         <button class="btn btn-outline-success" style="background: #F69F11; color: white;" type="submit">Search</button>
                     </form>
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
         </div>
     </header>
     {{-- header end --}}

     <div class="d-block" style="background: #C8C8C8; height: 41px"></div>

     {{-- body --}}
     <div class="container">
         <div class="d-flex  justify-content-between mt-3" id="column">
             <div class="col-md-6 p-5 mt-5">
                 <h2>Beberapa Kategori Desain <br><span>Untuk Kamu</span> </h2>
                 <p align="justify">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>
             </div>
             <div class="col-md-6 pt-5 mt-6 row d-flex justify-content-around">
                 <div class="d-flex justify-content-around mb-4">
                    <div class="box">
                        <img src="{{ asset('img/produk/1.avif') }}" alt="">
                    </div>
                    <div class="box">
                        <img src="{{ asset('img/produk/2.avif') }}" alt="">
                    </div>
                 </div>
                 <div class="d-flex justify-content-around mb-4">
                    <div class="box">
                        <img src="{{ asset('img/produk/3.avif') }}" alt="">
                    </div>
                    <div class="box">
                        <img src="{{ asset('img/produk/4.avif') }}" alt="">
                    </div>
                 </div>
             </div>
         </div>

         <div class="d-flex justify-content-between mt-3" id="column">
            <div class="col-md-6 pt-5 mt-6 row d-flex justify-content-around">
                <div class="d-flex justify-content-around mb-4">
                   <div class="box">
                        <img src="{{ asset('img/produk/5.avif') }}" alt="">
                   </div>
                   <div class="box">
                        <img src="{{ asset('img/produk/6.avif') }}" alt="">
                   </div>
                </div>
                <div class="d-flex justify-content-around mb-4">
                   <div class="box">
                        <img src="{{ asset('img/produk/7.avif') }}" alt="">
                   </div>
                   <div class="box">
                        <img src="{{ asset('img/produk/8.avif') }}" alt="">
                   </div>
                </div>
            </div>
             <div class="col-md-6 p-5 mt-5">
                 <h2>Temukan Desain yang  <br><span>Kamu mau</span> </h2>
                 <p align="justify">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>
             </div>
         </div>

         <div class="d-flex flex-row justify-content-center mt-5 mb-5">
                 <a href="/produk" class="bg-primary py-2 px-3 rounded text-white text-decoration-none">Explore</a>
         </div>
     </div>
     {{-- end body --}}

     <div class="d-block" style="background: #C8C8C8; height: 41px"></div>



     {{-- testimoni --}}
     <h2 class="text-center mt-4">Apa Kata Mereka</h2>
     <div class="container mt-5 mb-5 d-flex justify-content-around" id="body-testimoni">
         <div class="testimoni">
            <div class="circle"><img src="{{ asset('img/user/yumiko.avif') }}" alt=""></div>
            <div class="text-box">
                <h5>Santi</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet officia nobis veniam voluptatibus doloribus optio aperiam aspernatur, harum delectus quos.</p>
            </div>
         </div>
         <div class="testimoni">
            <div class="circle"><img src="{{ asset('img/user/asrul.avif') }}" alt=""></div>
            <div class="text-box">
                <h5>Asrul</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet officia nobis veniam voluptatibus doloribus optio aperiam aspernatur, harum delectus quos.</p>
            </div>
         </div>
         <div class="testimoni">
            <div class="circle"><img src="{{ asset('img/user/ani.avif') }}" alt=""></div>
            <div class="text-box">
                <h5>Ani</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet officia nobis veniam voluptatibus doloribus optio aperiam aspernatur, harum delectus quos.</p>
            </div>
         </div>
     </div>
     {{-- end testimoni --}}




@endsection



