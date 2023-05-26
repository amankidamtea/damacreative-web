{{-- Navbar --}}


<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container p-2">
      <a class="brand" href="/"><img height="29" src="img/logo.svg" alt=""></a>
      <div class="menu">
        <input type="checkbox" id="checkbox">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="collapse navbar-collapse d-flex justify-content-between " id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategori
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="#">Cara Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/produk"">Semua Produk</a>
                </li>
                </ul>
            </ul>
            <ul class="navbar-nav float-end">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Hi, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/profile"><i class="bi bi-person"></i> Profile</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                            <form action="/logout" method="post">@csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                      </li>
                    </ul>
                  </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="/login" >Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Daftar</a>
                </li>
                @endauth

            </ul>
      </div>
    </div>
  </nav>
{{-- Navbar end --}}
