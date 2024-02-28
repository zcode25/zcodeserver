<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #fff;">
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
              <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
              <a class="nav-link {{ Request::is('project') ? 'active' : '' }}" href="/project">Projects</a>
              <a class="nav-link" href="/#contact">Contact Us</a>
          </div>
      </div>
  </div>
</nav>