@extends('main.main')

@section('body')
    <main class="login mb-5 mt-5">
        <div class="d-flex col-md-5 shadow-lg m-0 p-3 responsive bg-white rounded">
            <div class="col-md-6 p-3 border border-1 border-success rounded bg-dark">
                <h2 class="text-white">Masuk</h2>
                @if (Session::has('pesan'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ Session::get('pesan') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="{{ route('login') }}" method="post">@csrf
                    <div class="input-group">
                        <label for="" class="text-white">email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group">
                        <label for="" class="text-white">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword" required>
                        <button type="button" class="toggle" id="btnToggle" onclick="passBtn()"><i id="eyeIcon" class="bi bi-eye"></i></button>
                    </div>
                    <a href="" class="nav-link m-0 p-0 forgot">lupa password</a>
                    <button type="submit" class="btn btn-success mt-2">Masuk</button>
                </form>
            </div>
            <div class="col-md-4 side-item">
                <h2 class="mt-3 text-success">Info</h2>
                <p align="justify">Silahkan masuk, jika tidak mempunyai akun silahkan daftar terlebih dahulu, klik <a href="" class="text-warning">disini</a> untuk melakukan pendaftaran</p>
            </div>
        </div>

    </main>
@endsection
