@extends('main.main')

@section('body')
    <main class="login mb-5 mt-5">
        <div class="d-flex col-md-5 shadow-lg m-0 p-3 responsive bg-white rounded">
            <div class="col-md-6 p-3 border border-1 border-success rounded bg-dark">
                <h2 class="text-white">Daftar</h2>
                <form action="{{ route('register.store') }}" method="post">@csrf
                    <div class="input-group">
                        <label for="" class="text-white">Name</label>
                        <input type="text" name="name" value="" class="form-control @error('name') is-invalid  @enderror" required>
                        @error('name')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-group">
                        <label for="" class="text-white">Email</label>
                        <input type="text" name="email" value="" class="form-control @error('email') is-invalid @enderror" required>
                        @error('email')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-group">
                        <label for="" class="text-white">Password</label>
                        <input type="password" name="password" value="" class="form-control @error('password') is-invalid @enderror" id="inputPassword" required>
                        <button type="button" class="toggle" onclick="passBtn()"><i id="eyeIcon" class="bi bi-eye"></i></button>
                        @error('password')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn  btn-success mt-2 px-3  ">Daftar</button>
                </form>
            </div>
            <div class="col-md-4 side-item">
                <h2 class="mt-3 text-success">Info</h2>
                <p align="justify" >Silahkan daftar, jika sudah mempunyai akun silahkan masuk, klik <a href="" class="text-warning">disini</a> untuk masuk</p>
            </div>
        </div>

    </main>
@endsection
