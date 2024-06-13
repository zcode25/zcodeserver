@extends('layouts.main')
@section('container')
<section class="order mt-5 pt-5 pb-5" id="order">
  <div class="container">
      <div class="row text-center mb-5">
          <div class="col-md-12">
                <p class="text-light"><i class="fa-solid fa-ranking-star me-2"></i> Formulir Pemesanan</p>
                <h3 class="fw-bold text-light mb-2">Jasa Pengembangan Website</h3>
                <p class="text-light">Silahkan isi data dibawah ini untuk memudahkan kami membuat penawaran yang terbaik.</p>
          </div>
      </div>
      {{-- <form action=""> --}}
      <div class="row">
        <div class="col-xl-8">
          <div class="row mb-3">
            <div class="col-xl-12">
              <div class="card mb-3">
                <div class="card-header">Informasi Data Diri</div>
                <div class="card-body">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label for="name" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                      <input type="email" class="form-control bg-dark text-light border-secondary" id="name" name="name">
                    </div>
                    <div class="col-md-6">
                      <label for="customerType" class="form-label">Jenis Pelanggan <span class="text-danger">*</span></label>
                      <select class="form-select bg-dark text-light border-secondary" aria-label="Default select example" id="customerType" name="customerType">
                        <option value="Personal">Personal</option>
                        <option value="Pemilik Usaha">Pemilik Usaha</option>
                        <option value="Perusahaan">Perusahaan</option>
                        <option value="Organisasi">Organisasi</option>
                        <option value="Komunitas">Komunitas</option>
                        <option value="Instansi">Instansi</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                      <input type="email" class="form-control bg-dark text-light border-secondary" id="email" name="email">
                    </div>
                    <div class="col-md-6">
                      <label for="telephone" class="form-label">WhatsApp / Telepon <span class="text-danger">*</span></label>
                      <input type="tel" class="form-control bg-dark text-light border-secondary" id="telephone" name="telephone">
                    </div>
                    <div class="col-12">
                        <label for="address" class="form-label">Alamat <span class="text-danger">*</span></label>
                        <textarea class="form-control bg-dark text-light border-secondary" id="address" name="alamat" rows="3"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-xl-12">
              <div class="card mb-3">
                <div class="card-header">Deskripsi Bisnis</div>
                <div class="card-body">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label for="business" class="form-label">Nama Bisnis <span class="text-danger">*</span></label>
                      <input type="text" class="form-control bg-dark text-light border-secondary" id="business" name="business">
                    </div>
                    <div class="col-md-6">
                      <label for="bidang" class="form-label">Bidang <span class="text-danger">*</span></label>
                      <select class="form-select bg-dark text-light border-secondary" aria-label="Default select example" id="bidang" name="customerType">
                        <option value="Konstruksi">Konstruksi</option>
                        <option value="Manufaktur">Manufaktur</option>
                        <option value="Fashion">Fashion</option>
                        <option value="Konsultan">Konsultan</option>
                        <option value="Hukum">Hukum</option>
                        <option value="Industri">Industri</option>
                        <option value="Jasa">Jasa</option>
                        <option value="Kuangan">Kuangan</option>
                        <option value="Kecantikan">Kecantikan</option>
                        <option value="Logistik">Logistik</option>
                        <option value="Kuangan">Kuangan</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Olahraga">Olahraga</option>
                        <option value="Otomotif">Otomotif</option>
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Politik">Politik</option>
                        <option value="Retail">Retail</option>
                        <option value="Seni">Seni</option>
                        <option value="Teknologi">Teknologi</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
                    </div>
                    <div class="col-12">
                        <label for="businessDesc" class="form-label">Jelaskan mengenai bisnis kamu <span class="text-danger">*</span></label>
                        <textarea class="form-control bg-dark text-light border-secondary" id="businessDesc" name="businessDesc" rows="3"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="card mb-3">
                <div class="card-header">Detail Kebutuhan Website</div>
                <div class="card-body">
                  <div class="row g-3">
                    <div class="col-12">
                        <label for="businessDesc" class="form-label">Jelaskan websiteyang diinginkan <span class="text-danger">*</span></label>
                        <textarea class="form-control bg-dark text-light border-secondary" id="businessDesc" name="businessDesc" rows="3"></textarea>
                    </div>
                    <div class="col-12">
                        <label for="businessDesc" class="form-label">Link Referensi <span class="text-secondary">(Opsional)</span></label>
                        <p class="text-secondary">Alamat URL website lainnya yang menjadi referensi.</p>
                        <input type="text" class="form-control bg-dark text-light border-secondary" id="business" name="business">
                    </div>
                    <div class="col-12">
                        <label for="businessDesc" class="form-label">Dokumen Pendukung <span class="text-secondary">(Opsional)</span></label>
                        <p class="text-secondary">*Upload dokumen pendukung seperti (logo perusahaan, brand guidelines, referensi dsb). <br>
                            *Max 5Mb | File: .doc .pdf .png, .jpg, .jpeg</p>
                        <input type="file" class="form-control bg-dark text-light border-secondary" id="business" name="business">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="row mb-3">
            <div class="col-xl-12">
              <div class="card mb-3">
                <div class="card-header">Ringkasan Order</div>
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5>Paket Lite</h5>
                      <p>Paket website untuk personal branding atau portofolio kamu</p>
                      <p>Lama Proses: <span class="fw-bold">14</span> Hari</p>
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- </form> --}}
  </div>
</section>

@endsection
