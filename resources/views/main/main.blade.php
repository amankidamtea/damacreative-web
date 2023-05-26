<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- jquery --}}
    <script src="{{ asset('js/jquery.js') }}"></script>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/styleee.css') }}">

    <title>home</title>
  </head>
  <body class="bg-white">


<div class="d-flex flex-column justify-content-between" style="min-height: 100vh;">
    <div>{{-- navbar --}}
        @include('partial.navbar')
        {{-- end navbar --}}
    </div>
    <div>
        @yield('body')
    </div>
    <div>
        {{-- side bar --}}
        @include('partial.sidebar')
        {{-- end side bar --}}

        {{-- footer --}}
        @include('partial.footer')
        {{-- end footer --}}
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="{{ asset('js/scriptt.js') }}"></script>
</body>
</html>
