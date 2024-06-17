@extends('layouts.main')
@section('container')
<section class="order mt-5 pt-5 pb-5" id="order">
  <div class="container">
      <div class="row text-center mb-5">
          <div class="col-md-12">
                <p class="text-light"><i class="fa-regular fa-rectangle-list me-2"></i>Formulir Pemesanan</p>
                <h3 class="fw-bold text-light mb-2">Jasa Pengembangan Website</h3>
                <p class="text-light">Silahkan isi data dibawah ini untuk memudahkan kami membuat penawaran yang terbaik.</p>
          </div>
      </div>
      <form action="/order/save" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-xl-8">
          <div class="row mb-3">
            <div class="col-xl-12">
              <div class="card mb-3">
                <div class="card-header fw-semibold">Informasi Data Diri</div>
                <div class="card-body">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label for="clientName" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                      <input type="text" class="form-control bg-dark text-light border-secondary @error('clientName') is-invalid @enderror" id="clientName" name="clientName" placeholder="Masukan nama kamu" value="{{ old('clientName') }}">
                      @error('clientName')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="col-md-6">
                      <label for="clientType" class="form-label">Jenis Pelanggan <span class="text-danger">*</span></label>
                      <select class="form-select bg-dark text-light border-secondary" aria-label="Default select example" id="clientType" name="clientType">
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
                      <label for="clientEmail" class="form-label">Email <span class="text-danger">*</span></label>
                      <input type="email" class="form-control bg-dark text-light border-secondary @error('clientEmail') is-invalid @enderror" id="clientEmail" name="clientEmail" placeholder="Ex: joko@gmail.com" value="{{ old('clientEmail') }}">
                      @error('clientEmail')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="col-md-6">
                      <label for="clientTel" class="form-label">WhatsApp / Telepon <span class="text-danger">*</span></label>
                      <input type="tel" class="form-control bg-dark text-light border-secondary @error('clientTel') is-invalid @enderror" id="clientTel" name="clientTel" placeholder="Ex: 081312344321" value="{{ old('clientTel') }}">
                      @error('clientTel')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="col-12">
                      <label for="clientAddress" class="form-label">Alamat <span class="text-danger">*</span></label>
                      <textarea class="form-control bg-dark text-light border-secondary @error('clientAddress') is-invalid @enderror" id="clientAddress" name="clientAddress" rows="3" placeholder="Masukan alamat lengkap kamu" value="{{ old('clientAddress') }}"></textarea>
                      @error('clientAddress')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-xl-12">
              <div class="card mb-3">
                <div class="card-header fw-semibold">Deskripsi Bisnis</div>
                <div class="card-body">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label for="businessName" class="form-label">Nama Bisnis <span class="text-danger">*</span></label>
                      <input type="text" class="form-control bg-dark text-light border-secondary @error('businessName') is-invalid @enderror" id="businessName" name="businessName" placeholder="Masukan nama bisnis kamu" value="{{ old('businessName') }}">
                      @error('businessName')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="col-md-6">
                      <label for="businessField" class="form-label">Bidang <span class="text-danger">*</span></label>
                      <select class="form-select bg-dark text-light border-secondary" aria-label="Default select example" id="businessField" name="businessField">
                        <option value="Konstruksi">Konstruksi</option>
                        <option value="Manufaktur">Manufaktur</option>
                        <option value="Fashion">Fashion</option>
                        <option value="Konsultan">Konsultan</option>
                        <option value="Hukum">Hukum</option>
                        <option value="Industri">Industri</option>
                        <option value="Jasa">Jasa</option>
                        <option value="Kuangan">Keuangan</option>
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
                      <textarea class="form-control bg-dark text-light border-secondary @error('businessDesc') is-invalid @enderror" id="businessDesc" name="businessDesc" rows="3" placeholder="Masukan keterangan mengenai bisnis kamu secara lengkap" value="{{ old('businessDesc') }}"></textarea>
                      @error('businessDesc')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-xl-12">
              <div class="card mb-3">
                <div class="card-header fw-semibold">Detail Kebutuhan Website</div>
                <div class="card-body">
                  <div class="row g-3">
                    <div class="col-12">
                      <label for="webDesc" class="form-label">Jelaskan website yang diinginkan <span class="text-danger">*</span></label>
                      <textarea class="form-control bg-dark text-light border-secondary @error('webDesc') is-invalid @enderror" id="webDesc" name="webDesc" rows="3" placeholder="Masukan keterangan website yang diinginkan seperti tema, fitur, dan lainya" value="{{ old('webDesc') }}"></textarea>
                      @error('webDesc')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="col-12">
                      <label for="webLink" class="form-label">Link Referensi <span class="text-secondary">(Opsional)</span></label>
                      <p class="text-secondary">Alamat URL website lainnya yang menjadi referensi.</p>
                      <input type="text" class="form-control bg-dark text-light border-secondary @error('webLink') is-invalid @enderror"  id="webLink" name="webLink" placeholder="Ex: https://www.site.com" value="{{ old('webLink') }}">
                      @error('webLink')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="col-12">
                      <label for="webDoc" class="form-label">Dokumen Pendukung <span class="text-secondary">(Opsional)</span></label>
                      <p class="text-secondary">*Upload dokumen pendukung seperti (logo perusahaan, brand guidelines, referensi dsb). <br>
                        *Max 5Mb | File: .doc .pdf .png, .jpg, .jpeg</p>
                      <input type="file" class="form-control bg-dark text-light border-secondary" id="webDoc" name="webDoc">
                      <input type="hidden" id="webPackage" name="webPackage" value="Paket Lite">
                      <input type="hidden" id="price" name="price" value="1999000">
                      <input type="hidden" id="discount" name="discount" value="400000">
                      <input type="hidden" id="total" name="total" value="1599000">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-xl-12">
              <div class="d-grid gap-2">
                <button class="btn btn-primary btn-xl" type="submit" name="submit">Buat Pesanan</button>
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
                  <div class="row">
                    <div class="col-8">
                      <p>Biaya Pengembangan</p>
                    </div>
                    <div class="col-4">
                      <p class="text-end">Rp 1.999.000</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-8">
                      <p>Biaya Tambahan</p>
                    </div>
                    <div class="col-4">
                      <p class="text-end">Rp 0</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <p>Diskon</p>
                    </div>
                    <div class="col-6">
                      <p class="text-end fw-semibold text-info">- Rp 400.000</p>
                    </div>
                  </div>
                  <div class="row">
                    <hr>
                    <div class="col-6">
                      <p>Estimasi Biaya</p>
                    </div>
                    <div class="col-6">
                      <p class="text-end fw-bold">Rp 1.599.000</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="alert alert-primary" role="alert">
                        <p class="fw-bold mb-3">Note: </p>
                        <p>Harga diatas masih estimasi dari sistem dan <b>belum harga final</b>, karena setiap website dibuat khusus.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p class="text-light"><i class="fa-solid fa-headset me-2"></i> Kesulitan Mengisi Formulir?</p>
            </div>
          </div>
          <div class="row">
            <div class="col mb-4">
              <div class="card bg-success p-0" style="cursor: pointer;" onclick="window.open('https://api.whatsapp.com/send?phone=6281288228600&text=Hello%20ZCODE!', '_blank');">
                  <div class="card-body">
                      <div class="row">
                        <div class="col-4 text-center align-self-center">
                          <i class="bi bi-whatsapp" style="font-size: 50px;"></i>
                        </div>
                        <div class="col-8">
                          <h5 class="card-title mt-3">Chat Via WhatsApp</h5>
                          <p class="card-text">0812 8822 8600</p>
                        </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      </form>
  </div>
</section>

@endsection
