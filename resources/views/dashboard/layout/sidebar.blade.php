<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? '' : 'collapsed' }} " href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dasbor</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('profile') ? '' : 'collapsed' }}" href="/profile">
          <i class="bi bi-person"></i>
          <span>Profil</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('manageuser') ? '' : 'collapsed' }}" href="/manageuser">
          <i class="bi bi-people"></i>
          <span>Manajemen Pengguna</span>
        </a>
      </li><!-- End Manajemen User Page Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('produk') ? '' : 'collapsed' }}" href="/produk">
          <i class="bi bi-cart"></i>
          <span>Produk Desain</span>
        </a>
      </li><!-- End Produk Desain Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/profile">
          <i class="bi bi-cash"></i>
          <span>Penghasilan</span>
        </a>
      </li><!-- End Penghasilan Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/profile">
          <i class="bi bi-clipboard2-data"></i>
          <span>Peninjauan Desain</span>
        </a>
      </li><!-- End Peninjauan Desain Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/profile">
            <i class="bi bi-file-earmark-plus"></i>
          <span>Tambah Desain</span>
        </a>
      </li><!-- Tambah Desain Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/profile">
            <i class="bi bi-clock-history"></i>
          <span>Riwayat Pembelian</span>
        </a>
      </li><!-- List pembelian Page Nav -->



    </ul>

  </aside><!-- End Sidebar-->
