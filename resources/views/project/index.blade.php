@extends('layouts.main')
@section('container')
<section class="project mt-5 pt-5 pb-5" id="project">
  <div class="container">
      <div class="row text-center mb-4">
          <div class="col-md-12">
              <h3 class="fw-bold mb-2">Our Projects</h3>
              <p class="text-secondary">These are some of the projects we have done</p>
          </div>
      </div>
      <div class="row mb-5 justify-content-center">
          <div class="col-md-6 col-xl-6 mb-4">
              <div class="card" onclick="window.open('https://hesti.zcodeserver.my.id/')" style="cursor: pointer">
                  <img src="/img/quran.png" class="card-img-top">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-8">
                              <h6 class="card-title fw-bold mb-2">IT Helpdesk</h6>
                              <p class="card-text text-secondary">Version 1.1.0</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl-6 mb-4">
            <div class="card" onclick="window.open('https://zcode25.github.io/switch-to-whatsApp/')" style="cursor: pointer">
                <img src="/img/stw.png" class="card-img-top">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h6 class="card-title fw-bold mb-2">Switch to WA</h6>
                            <p class="card-text text-secondary">Version 1.1.0</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-6 mb-4">
              <div class="card" onclick="window.open('https://fuluss.rf.gd/')" style="cursor: pointer">
                  <img src="/img/fuluss.png" class="card-img-top">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-8">
                              <h6 class="card-title fw-bold mb-2">Fuluss</h6>
                              <p class="card-text text-secondary">Version 1.1.0</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl-6 mb-4">
              <div class="card" onclick="window.open('https://ikpop.rf.gd/')" style="cursor: pointer">
                  <img src="/img/iKPOP.png" class="card-img-top">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-8">
                              <h6 class="card-title fw-bold mb-2">iKPOP</h6>
                              <p class="card-text text-secondary">Version 3.1.0</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl-6 mb-4">
              <div class="card" onclick="window.open('https://drivelistenkorea.rf.gd/')" style="cursor: pointer">
                  <img src="/img/dlk.png" class="card-img-top">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-8">
                              <h6 class="card-title fw-bold mb-2">Drive Listen Korea</h6>
                              <p class="card-text text-secondary">Version 1.2.0</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl-6 mb-4">
              <div class="card" onclick="window.open('https://electronicshop.rf.gd/')" style="cursor: pointer">
                  <img src="/img/e-shop.png" class="card-img-top">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-8">
                              <h6 class="card-title fw-bold mb-2">Electronic Shop</h6>
                              <p class="card-text text-secondary">Version 2.1.0</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</section>

<section class="footer pt-5 pb-5" id="footer">
  <div class="container">
      <div class="row">
          <div class="col-md-12 text-center">
              <h3>ZCODE</h3>
              <p>Create, Learn, and Discuss Together About Website Programming With Fun</p>
              <p>© 2022 ZCODE. All rights reserved.</p>
          </div>
      </div>
  </div>
</section>
@endsection