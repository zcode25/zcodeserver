<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #000;">
  <div class="container">
      <a class="navbar-brand" href="/">
          <img src="/img/icon.png" alt="" height="35">
          <!-- <span class="text-primary ms-2">ZCODE</span> -->
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
              <!-- <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a> -->
              <a class="nav-link {{ Request::is('project') ? 'active' : '' }}" href="/project">Projek</a>
              <a class="nav-link {{ Request::is('client') ? 'active' : '' }}" href="/client">Klien</a>
              <a class="nav-link" href="/#contact">Kontak Kami</a>
          </div>
      </div>
  </div>
</nav>