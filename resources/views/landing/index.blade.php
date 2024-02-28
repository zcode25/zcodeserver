@extends('layouts.main')
@section('container')
<section class="hero mb-5 pt-5 pb-5" id="hero">
  <div class="container">
      <div class="row d-flex justify-content-center">
          <div class="col-xl-8 text-center">
              <h1 class="title text-primary mb-5 fw-bold"><span class="text-dark">Web Development</span><br>Beyond Boundaries</h1>
              <p class="mb-5 text-dark">ZCODE provides dynamic web development solutions by delivering digital experiences that seamlessly combine innovation, functionality and aesthetics.</p>
              <a href="#contact" class="btn btn-primary px-4 me-2">Contact Us</a>
              <a href="/project" class="btn btn-light">Projects</a>
          </div>
      </div>
  </div>
</section>

<section class="about mb-5 pt-5 pb-5" id="about">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="row d-flex justify-content-between des">
                  <div class="col-md-6 col-xl-5 mb-4 text-center">
                      {{-- <img src="/img/about.jpg" class="rounded img-fluid" alt="zcode"> --}}
                      <img src="/img/icon.png" class="rounded img-fluid" alt="zcode">
                    </div>
                    <div class="col-md-6 col-xl-6 align-self-center">
                      <h3 class="mb-3 lh-base fw-bold">We are ready to provide the best solution</h3>
                      <p class="justify">ZCODE is a platform for creating, learning and discussing together about website programming. You will have a pleasant experience and can increase your insight and knowledge with us. We can help you create the website of your dreams. We can learn and discuss together to add insight and knowledge about web programming.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="feature mb-5 pt-5 pb-5" id="feature">
  <div class="container">
      <div class="row text-center">
          <div class="col-md-12 mb-5">
              <h3 class="fw-bold">What Features Will You Get?</h3>
          </div>
      </div>
      <div class="row text-center">
          <div class="col-md-4 mb-5">
              <i class="bi bi-window-plus" style="font-size: 60px;"></i>
              <h5 class="mt-3">Create</h5>
              <p class="text-secondary">Create the website of your dreams</p>
          </div>
          <div class="col-md-4 mb-5">
              <i class="bi bi-book" style="font-size: 60px"></i>
              <h5 class="mt-3">Learn</h5>
              <p class="text-secondary">You can learn easily and have fun</p>
          </div>
          <div class="col-md-4">
              <i class="bi bi-chat-text" style="font-size: 60px"></i>
              <h5 class="mt-3">Discuss</h5>
              <p class="text-secondary">Increase your insight and knowledge</p>
          </div>
      </div>
  </div>
</section>

<section class="project mb-5 pt-5 pb-5" id="project">
  <div class="container">
      <div class="row text-center mb-5">
          <div class="col-md-12">
              <h3 class="fw-bold">Our Projects</h3>
          </div>
      </div>
      <div class="row mb-5">
          <div class="col-md-6 col-xl-4 mb-4">
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
          <div class="col-md-6 col-xl-4 mb-4">
              <div class="card" onclick="window.open('https://freenet.id/')" style="cursor: pointer">
                  <img src="/img/freenet2.png" class="card-img-top">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-12">
                              <h6 class="card-title fw-bold mb-2">FREENET.ID</h6>
                              <p class="card-text text-secondary">Version 1.1.0</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl-4 mb-4">
              <div class="card" onclick="window.open('https://dailyquran.rf.gd/')" style="cursor: pointer">
                  <img src="/img/quran.png" class="card-img-top">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-12">
                              <h6 class="card-title fw-bold mb-2">Daily Quran</h6>
                              <p class="card-text text-secondary">Version 1.1.0</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl-4 mb-4">
              <div class="card" onclick="window.open('https://fuluss.rf.gd/')" style="cursor: pointer">
                  <img src="/img/fuluss.png" class="card-img-top">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-12">
                              <h6 class="card-title fw-bold mb-2">Fuluss</h6>
                              <p class="card-text text-secondary">Version 1.1.0</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl-4 mb-4">
              <div class="card" onclick="window.open('https://ikpop.rf.gd/')" style="cursor: pointer">
                  <img src="/img/iKPOP.png" class="card-img-top">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-12">
                              <h6 class="card-title fw-bold mb-2">iKPOP</h6>
                              <p class="card-text text-secondary">Version 3.1.0</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl-4 mb-4">
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
      </div>
      <div class="row">
          <div class="col text-center">
              <a href="/project" class="btn btn-light">View More</a>
          </div>
      </div>
  </div>
</section>

<section class="client mb-5 pt-5 pb-5" id="client">
  <div class="container">
      <div class="row text-center">
          <div class="col-md-12 mb-5">
              <h3 class="fw-bold">Our Clients</h3>
          </div>
      </div>
      <div class="row mb-5">
          <div class="col-xl-6 mb-5 align-self-center">
              <div class="row justify-content-center">
                  <div class="col-4 col-md-4 text-center align-self-center">
                      {{-- <img src="/img/barbersquad.png" alt="" width="100px"> --}}
                  </div>
                  <div class="col-8 col-md-5 align-self-center">
                      <h1 class="fw-bold" style="color: #000000; font-size: 45px;">Barbersquad</h1>
                  </div>
              </div>
          </div>
          <div class="col-xl-6">
              <div class="card" onclick="window.open('https://freenet.id/')" style="cursor: pointer">
                  <div class="card-body">
                      <div class="row">
                          <div class="col">
                              <h5 class="card-title fw-bold">Sofyan</h5>
                              <h6 class="card-subtitle mb-3 text-secondary">Bekasi, Indonesia</h6>
                          </div>
                      </div>
                      <p class="card-text">The service provided was very good, all problems and bugs were resolved until the application actually entered the production stage.</p>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
        <div class="col-xl-6 mb-5 align-self-center">
            <div class="row justify-content-center">
                <div class="col-4 col-md-4 text-center align-self-center">
                    <img src="/img/freenet.png" alt="" width="100px">
                </div>
                <div class="col-8 col-md-5 align-self-center">
                    <h1 class="fw-bold" style="color: #5526FF; font-size: 45px;">FREENET.ID</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card" onclick="window.open('https://freenet.id/')" style="cursor: pointer">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title fw-bold">Dika Burhanudin</h5>
                            <h6 class="card-subtitle mb-3 text-secondary">Sukabumi, Indonesia</h6>
                        </div>
                    </div>
                    <p class="card-text">The service provided is fast. Moreover, if there is a problem, it is quickly resolved. Okay, that's very good. 😁</p>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>

<section class="contact mb-5 pt-5 pb-5" id="contact">
  <div class="container">
      <div class="row text-center">
          <div class="col-md-12 mb-5">
              <h3 class="fw-bold">Contact Us</h3>
          </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-md-6 col-xl-4 text-center mb-4">
              <div class="card" style="cursor: pointer;" onclick="window.open('https://www.instagram.com/zcode25/', '_blank')">
                  <div class="card-body">
                      <i class="bi bi-instagram" style="font-size: 30px;"></i>
                      <h5 class="card-title mt-3">Instagram</h5>
                      <p class="card-text">@zcode25</p>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl-4 text-center mb-4">
              <div class="card" style="cursor: pointer;" onclick="window.open('mailto:adamzein345@gmail.com', '_blank')">
                  <div class="card-body">
                      <i class="bi bi-envelope" style="font-size: 30px;"></i>
                      <h5 class="card-title mt-3">Email</h5>
                      <p class="card-text">zcodeserver@gmail.com</p>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl-4 text-center mb-4">
              <div class="card" style="cursor: pointer;" onclick="window.open('https://t.me/zcode_community', '_blank')">
                  <div class="card-body">
                      <i class="bi bi-telegram" style="font-size: 30px;"></i>
                      <h5 class="card-title mt-3">Telegram</h5>
                      <p class="card-text">ZCODE Community</p>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl-4 text-center mb-4">
              <div class="card" style="cursor: pointer;" onclick="window.open('https://api.whatsapp.com/send?phone=6281288228600&text=Hello%20ZCODE!', '_blank');">
                  <div class="card-body">
                      <i class="bi bi-whatsapp" style="font-size: 30px;"></i>
                      <h5 class="card-title mt-3">WhatsApp</h5>
                      <p class="card-text">0812 8822 8600</p>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl-4 text-center">
              <div class="card" style="cursor: pointer;" onclick="window.open('https://github.com/zcode25', '_blank');">
                  <div class="card-body">
                      <i class="bi bi-github" style="font-size: 30px;"></i>
                      <h5 class="card-title mt-3">GitHub</h5>
                      <p class="card-text">zcode25</p>
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