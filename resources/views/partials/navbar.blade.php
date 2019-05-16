<nav class="navbar navbar-expand-lg navbar-bg">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('bid') }}">Bidding</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="lelangDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Lelang
          </a>
          <div class="dropdown-menu" aria-labelledby="lelangDropdown">
            <a class="dropdown-item" href="{{ route('lelang.tambah') }}">Buat Lelang</a>
            <a class="dropdown-item" href="{{ route('lelang') }}">Riwayat Lelang</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
