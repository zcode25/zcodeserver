@extends('layouts.main')
@section('container')

<section class="hero" id="hero">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-8 text-center">
                <h1 class="title text-primary mb-5 fw-semibold"><span class="text-light">Mewujudkan Website Impian</span><br>Menjadi Nyata</h1>
                <p class="mb-5 title-text text-light">Kami akan membantu kamu mengembangkan website mulai dari perencanaan, perancangan, pengembangan, hingga implementasi.</p>
                <a href="#contact" class="btn btn-primary px-4 me-2">Buat Website Sekarang <i class="ms-2 fa-solid fa-paper-plane"></i></a>
                <a href="https://api.whatsapp.com/send?phone=6281288228600&text=Hello%20ZCODE!" target="blank" class="btn btn-dark">Konsultasi</a>
            </div>
        </div>
    </div>
</section>


<section class="technology mt-5 mb-5 pt-5 pb-5" id="technology">
  <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <p class="text-light"><i class="fa-solid fa-gears me-2"></i> Teknologi yang Digunakan</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-sm-4 col-md-2 mb-3">
                <img src="/img/html-css-js.png" class="rounded img-fluid white-image" alt="HTML CSS JS">
            </div>
            <div class="col-6 col-sm-4 col-md-2 mb-3">
                <img src="/img/bootstrap.png" class="rounded img-fluid white-image" alt="Bootstrap">
            </div>
            <div class="col-6 col-sm-4 col-md-2 mb-3">
                <img src="/img/laravel.png" class="rounded img-fluid white-image" alt="Laravel">
            </div>
            <div class="col-6 col-sm-4 col-md-2 mb-3">
                <img src="/img/wordpress.png" class="rounded img-fluid white-image" alt="WordPress">
            </div>
            <div class="col-6 col-sm-4 col-md-2 mb-3">
                <img src="/img/elementor.png" class="rounded img-fluid white-image" alt="Elementor">
            </div>
        </div>
  </div>
</section>

<section class="about mt-5 mb-5 pt-5 pb-5" id="about">
  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row d-flex justify-content-between des">
                        <div class="col-md-6 col-xl-5 mb-4">
                            <img src="/img/about.png" class="rounded img-fluid" alt="zcode">
                        </div>
                        <div class="col-md-6 col-xl-6 align-self-center">
                            <p class="text-light"><i class="fa-solid fa-bolt me-2"></i> Tentang Kami</p>
                            <h3 class="mb-3 lh-base fw-bold text-light">Kami memberikan <span class="text-primary">solusi terbaik</span></h3>
                            <p class="justify mb-4 text-light">ZCODE berfokus dalam memberikan solusi terbaik dalam pengembangan web yang kamu inginkan. Kamu dapat berkonsultasi langsung dengan kami mengenai situs web yang akan dikembangkan.</p>
                            <a href="#contact" class="btn btn-dark px-4 me-2">Konsultasi Gratis</a>
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
                <p class="text-light"><i class="fa-solid fa-code-merge me-2"></i> Alur Kerja</p>
                <h3 class="fw-bold text-light">Bagaimana alur kerja kami?</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 mb-5">
                <i class="fa-solid fa-comments text-light" style="font-size: 60px;"></i>
                <h5 class="mt-5 text-light">Konsultasi</h5>
                <p class="text-secondary">Konsultasi adalah tahap awal di mana kami berdiskusi dengan kamu untuk memahami kebutuhan dan tujuan bisnis kamu. </p>
            </div>
            <div class="col-md-3 mb-5">
                <i class="fa-solid fa-code-branch text-light" style="font-size: 60px;"></i>
                <h5 class="mt-5 text-light">Perancangan</h5>
                <p class="text-secondary">Setelah memahami kebutuhan kamu, kami masuk ke tahap perancangan dengan metode UML (Unified Modelling Language).</p>
            </div>
            <div class="col-md-3">
                <i class="fa-solid fa-code text-light" style="font-size: 60px"></i>
                <h5 class="mt-5 text-light">Pengembangan</h5>
                <p class="text-secondary">Setelah perancangan disetujui, kami mulai tahap pengembangan dengan menggunakan CMS atau menuliskan kode (coding).</p>
            </div>
            <div class="col-md-3">
                <i class="fa-solid fa-rocket text-light" style="font-size: 60px"></i>
                <h5 class="mt-5 text-light">Implementasi</h5>
                <p class="text-secondary">Meluncurkan website dan memastikan semuanya berjalan lancar serta sesuai dengan kebutuhan</p>
            </div>
        </div>
    </div>
</section>

<section class="project mb-5 pt-5 pb-5" id="project">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-md-12">
                <p class="text-light"><i class="fa-solid fa-diagram-project me-2"></i> Projek</p>
                <h3 class="fw-bold text-light">Projek yang telah kami kembangkan</h3>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="row d-flex justify-content-between des">
                        <div class="col-md-6 col-xl-5 mb-4">
                            <img src="/img/hesti.png" class="rounded img-fluid" alt="zcode">
                        </div>
                        <div class="col-md-6 col-xl-6 align-self-center">
                            <h3 class="mb-3 lh-base fw-bold text-light">Sistem IT Helpdesk</h3>
                            <p class="mb-4 text-light">Sistem IT Helpdesk adalah platform atau layanan yang dirancang untuk menyediakan dukungan teknis dan bantuan kepada pengguna yang mengalami masalah dengan teknologi informasi di lingkungan kerja atau organisasi.</p>
                            <!-- <a href="#contact" class="btn btn-dark px-4 me-2">Konsultasi Gratis</a> -->
                        </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="row d-flex justify-content-between des">
                        <div class="col-md-6 col-xl-6 align-self-center">
                            <h3 class="mb-3 lh-base fw-bold text-light text-end">Sistem Kelola Keuangan</h3>
                            <p class="justify mb-4 text-light text-end">Sistem Kelola Keuangan adalah solusi komprehensif yang dirancang untuk memudahkan pengguna dalam mengelola pendapatan dan pengeluaran, serta memvisualisasikan data keuangan melalui grafik yang mudah dipahami.</p>
                            <!-- <div class="text-end">
                            <a href="#contact" class="btn btn-dark px-4 me-2">Konsultasi Gratis</a>
                            </div>   -->
                        </div>
                        <div class="col-md-6 col-xl-5 mb-4">
                            <img src="/img/fuluss.png" class="rounded img-fluid" alt="zcode">
                        </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row d-flex justify-content-between des">
                        <div class="col-md-6 col-xl-5 mb-4">
                            <img src="/img/e-shop.png" class="rounded img-fluid" alt="zcode">
                        </div>
                        <div class="col-md-6 col-xl-6 align-self-center">
                            <h3 class="mb-3 lh-base fw-bold text-light">Sistem E-Business</h3>
                            <p class="justify mb-4 text-light">Sistem E-Business adalah platform digital yang dirancang untuk mengelola dan mendukung semua aspek bisnis secara online, mulai dari penjualan, pemasaran, manajemen inventaris, hingga layanan pelanggan.</p>
                            <!-- <a href="#contact" class="btn btn-dark px-4 me-2">Konsultasi Gratis</a> -->
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pricing mb-5 pt-5 pb-5" id="pricing">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 mb-5">
                <p class="text-light"><i class="fa-solid fa-ranking-star me-2"></i> Pilihan Paket</p>
                <h3 class="fw-bold text-light">Harga Pembuatan Website</h3>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-xl-4">
                <div class="card lite">
                  <div class="card-body text-start">
                    <div class="row">
                        <div class="col">
                            <h3 class="text-light">Lite</h3>
                            <p class="text-light mb-3">Cocok untuk personal branding atau portofolio kamu</p>
                            <hr class="text-light">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <text class="card-subtitle mb-3 text-light">Mulai Dari</text>
                            <p class="fs-5 text-light text-decoration-line-through">Rp 1.999.000 <span class="ms-3 badge text-bg-dark">Diskon 20% </span></p>
                            <p class="fs-2 text-primary fw-semibold">Rp 1.599.000 <span class="fs-6 text-light">/tahun ke-I</span></p>
                            <div class="d-grid gap-2 mb-3">
                                <a href="/order/lite" class="btn btn-primary btn-lg" type="button">Pilih Paket</a>
                            </div>
                            <span class="text-light fs-6 mb-3">Rp 999.000/tahun saat perpanjang paket</span>
                            <hr class="text-light">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-primary ms-3 me-3"></i>Maksimal 5 Halaman</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-primary ms-3 me-3"></i>Desain Standar</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-primary ms-3 me-3"></i>Gratis Hosting</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-primary ms-3 me-3"></i>Gratis Domain</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-primary ms-3 me-3"></i>Gratis SSL</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-primary ms-3 me-3"></i>Pengerjaan 14 Hari</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-primary ms-3 me-3"></i>Wordpress</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-primary ms-3 me-3"></i>Lifetime Support</p>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card professional">
                  <div class="card-body text-start">
                    <div class="row">
                        <div class="col">
                            <h3 class="text-light">Professional</h3>
                            <p class="text-light mb-3">Cocok untuk branding bisnis maupun organisasi secara digital</p>
                            <hr class="text-light">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <text class="card-subtitle mb-3 text-light">Mulai Dari</text>
                            <p class="fs-5 text-light text-decoration-line-through">Rp 2.599.000 <span class="ms-3 badge text-bg-dark">Diskon 23% </span></p>
                            <p class="fs-2 text-light fw-semibold">Rp 1.999.000 <span class="fs-6 text-light">/tahun ke-I</span></p>
                            <div class="d-grid gap-2 mb-3">
                                <a href="/order/professional" class="btn btn-light btn-lg">Pilih Paket</a>
                            </div>
                            <span class="text-light fs-6 mb-3">Rp 1.199.000/tahun saat perpanjang paket</span>
                            <hr class="text-light">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-light ms-3 me-3"></i>Maksimal 7 Halaman</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-light ms-3 me-3"></i>Desain Premium</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-light ms-3 me-3"></i>Gratis Hosting</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-light ms-3 me-3"></i>Gratis Domain</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-light ms-3 me-3"></i>Gratis SSL</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-light ms-3 me-3"></i>Pengerjaan 30 Hari</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-light ms-3 me-3"></i>Wordpress</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-light ms-3 me-3"></i>Lifetime Support</p>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card advance">
                  <div class="card-body text-start">
                    <div class="row">
                        <div class="col">
                            <h3 class="text-light">Advance</h3>
                            <p class="text-light mb-3">Cocok untuk mengembangkan sistem website sesuai dengan kebutuhan</p>
                            <hr class="text-light">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <text class="card-subtitle mb-3 text-light">Mulai Dari</text>
                            <p class="fs-5 text-light text-decoration-line-through">Rp 4.999.000 <span class="ms-3 badge text-bg-dark">Diskon 40% </span></p>
                            <p class="fs-2 text-light fw-semibold">Rp 2.999.000 <span class="fs-6 text-light">/tahun ke-I</span></p>
                            <div class="d-grid gap-2 mb-3">
                                <button class="btn btn-light btn-lg" type="button">Pilih Paket</button>
                            </div>
                            <span class="text-light fs-6 mb-3">Rp 1.999.000/tahun saat perpanjang paket</span>
                            <hr class="text-light">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-light ms-3 me-3"></i>Full Custom Fitur</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-light ms-3 me-3"></i>Custom UI / UX Design</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-light ms-3 me-3"></i>Gratis Hosting</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-light ms-3 me-3"></i>Gratis Domain</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-light ms-3 me-3"></i>Gratis SSL</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-light ms-3 me-3"></i>Pengerjaan Sesuai Permintaan</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-light ms-3 me-3"></i>Laravel Version 11</p>
                            <p class="text-light fs-6"><i class="fa-solid fa-check text-light ms-3 me-3"></i>Lifetime Support</p>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="client mb-5 pt-5 pb-5" id="client">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 mb-5">
                <p class="text-light"><i class="fa-solid fa-ranking-star me-2"></i> Ulasan Klien</p>
                <h3 class="fw-bold text-light">Apa yang mereka katakan?</h3>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-xl-6">
                <div class="card glass-card">
                  <div class="card-body text-center">
                    <p class="card-text fst-italic text-light mb-3">"Pelayanan yang diberikan sangat baik, semua permasalahan dan bug teratasi hingga website sampai tahap production"</p>
                    <div class="row">
                        <div class="col">
                            <p class="mb-3 text-light"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> </p>
                            <h5 class="card-title fw-semibold text-light">Sofyan</h5>
                            <text class="card-subtitle mb-3 text-light">Bekasi, Indonesia</text>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card glass-card">
                  <div class="card-body text-center">
                    <p class="card-text fst-italic text-light mb-3">"Pelayanannya cepat. Apalagi kalau ada kendala, cepat diselesaikan. Oke, bagus banget. 😁"</p>
                    <div class="row">
                        <div class="col">
                            <p class="mb-3 text-light"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> </p>
                            <h5 class="card-title fw-semibold text-light">Dika Burhanudin</h5>
                            <text class="card-subtitle mb-3 text-light">Sukabumi, Indonesia</text>
                        </div>
                    </div>
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
            <p class="text-light"><i class="fa-solid fa-ranking-star me-2"></i> Kontak Kami</p>
                <h3 class="fw-bold text-light">Yuk konsultasi sekarang!</h3>
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
                <div class="card" style="cursor: pointer;" onclick="window.open('mailto:zcodeserver@gmail.com', '_blank')">
                    <div class="card-body">
                        <i class="bi bi-envelope" style="font-size: 30px;"></i>
                        <h5 class="card-title mt-3">Email</h5>
                        <p class="card-text">zcodeserver@gmail.com</p>
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
        </div>
    </div>
</section>

@endsection
