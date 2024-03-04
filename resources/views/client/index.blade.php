@extends('layouts.main')
@section('container')
<section class="project mt-5 pt-5 pb-5" id="project">
  <div class="container">
      <div class="row text-center mb-4">
          <div class="col-md-12">
              <h3 class="fw-bold mb-2">Our Client</h3>
              <p class="text-secondary">There are several clients who have collaborated with us</p>
          </div>
      </div>
      <div class="row mb-5 justify-content-center">
          <div class="col-xl-6 mb-4">
              <div class="card">
                  <img src="/img/barber.png" class="card-img-top">
                  <div class="card-body">
                      <div class="row mb-3">
                          <div class="col-12 text-center">
                            <h1 class="fw-bold" style="color: #000000; font-size: 40px;">Barbersquad</h1>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-12 text-center">
                          <h5 class="card-title fw-bold">Sofyan</h5>
                          <h6 class="card-subtitle mb-3 text-secondary">Bekasi, Indonesia</h6>
                        </div>
                      </div>
                      <div class="row mb-5">
                        <div class="col-12 text-center">
                          <p class="card-text">The service provided was very good, all problems and bugs were resolved until the application actually entered the production stage.</p>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-6 mb-4">
            <div class="card">
                <img src="/img/freenet2.png" class="card-img-top">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-12 text-center">
                            <h1 class="fw-bold" style="color: #5526FF; font-size: 40px;">FREENET.ID</h1>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-12 text-center">
                        <h5 class="card-title fw-bold">Dika Burhanudin</h5>
                        <h6 class="card-subtitle mb-3 text-secondary">Sukabumi, Indonesia</h6>
                      </div>
                    </div>
                    <div class="row mb-5">
                      <div class="col-12 text-center">
                        <p class="card-text">The service provided is fast. Moreover, if there is a problem, it is quickly resolved. Okay, that's very good. 😁</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
</section>

@endsection