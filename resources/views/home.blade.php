@extends('layout.main')

@section('title', 'Home')

@section('content')

  {{-- Banner Awal --}}
  <div class=" text-center banners ">
    <div class="banner">
      <div class="container">
          <p class="fw-bold text-white" style="font-size: 46px; margin-top: 50px;">Temukan Pekerjaan Impian Mu di sini.</p>
          <p class="mt-4 text-white gabung">Gabung dengan <span class="gabung1">maisyah.id</span>dan dapatkan pekerjaan terbaik untuk Mu!</p>
          <div class="row justify-content-md-center">
            <div class="col-5">
              <form class="d-flex" action="" method="" >
                <input class="form-control text-white me-4 shadow-5 border-2 " role="button" style="background-color: transparent;" type="search" placeholder="Posisi, Perusahaan, Lokasi" aria-label="search">
                <button class="btn btn-info btn-lg btn-cari fw-bold text-white">Cari</button>
              </form>
            </div>
          </div>
          <p class=" text-white gabung2">Bergabunglah dengan 1.000+ perusahaan yang sudah berkembang</p>
          <div class="container">
            <img class="me-4" src="{{ asset('image') }}/dbesto.png" role="button" alt="">
            <img class="me-4 ms-5" src="{{ asset('image') }}/sabana.png" role="button" alt="">
            <img class="me-4 ms-5" src="{{ asset('image') }}/Daarul.png" role="button" alt="">
            <img class="me-4 ms-5" src="{{ asset('image') }}/amanah.png" role="button" alt="">
            <img class="ms-5" src="{{ asset('image') }}/maghfirah.png" role="button" alt="">
          </div>
        </div>
      </div>
    </div>

  <br><br><br>
  <div class="container text-center mt-3">
    <div class="row">
      <div class="container col-7">
        <h3 style="font-size: 35px; font-weight:bold;">Percepat Pencarian Kerja Mu dengan Fitur 
          Lamar Sekali Klik dari Maisyah</h3>
      </div>
      <div class="container mt-4">
        <h3 style="font-size: 18px; color:#7C7C7C;">Mengusung Tema Teknologi Dalam Membantu Anda <br>
          Mencari Pekerjaan Dengan Proses Yang Mudah Dan Cepat</h3>
      </div>
    </div>
  </div>
  {{-- Banner Akhir --}}


  {{-- Pencarian Kerja Awal --}}
  <div class="container text-center mt-3">
    <div class="row">
      <div class="col-4 mt-3.6">
          <div class="rounded-circle d-flex align-items-center justify-content-center m-auto" style="width: 85px; height: 85px; background: rgba(49, 170, 224, 0.1);">
            <i class="fas fa-file-alt fa-2xl" style="color: #31AAE0;"></i>
          </div>
          <div class="text-center mt-3">
            <p class="fw-bold fs-4">Daftar di Website</p>
            <p class="text-muted fs-6 md-1">Tingkatkan Kredibilitas Mu Dengan <br>
              Membuat Resume yang Menarik</p>
          </div>
      </div>
      <div class="col-4 mt-3.6">
          <div class="rounded-circle d-flex align-items-center justify-content-center m-auto" style="width: 85px; height: 85px; background: rgba(49, 170, 224, 0.1);">
            <i class="fa-solid fa-circle-user fa-2xl" style="color: #31AAE0;"></i>
          </div>
          <div class="text-center mt-3">
            <p class="fw-bold fs-4">Lengkapi Profile Mu</p>
            <p class="text-muted fs-6" >Lengkapi Profil Mu Agar <br>
              Perekrut Dapat Melihat Informasi Tentang Mu</p>
          </div>
      </div>
      <div class="col-4 mt-3.6">
          <div class="rounded-circle d-flex align-items-center justify-content-center m-auto" style="width: 85px; height: 85px; background: rgba(49, 170, 224, 0.1);">
            <i class="fas fa-calendar-alt fa-2xl" style="color: #31AAE0;"></i>
          </div>
          <div class="text-center mt-3">
            <p class="fw-bold fs-4">Kandidat Terpilih</p>
            <p class="text-muted fs-6">Kandidat yang terpilih dapat <br>
              masuk ke perusahaan untuk wawancara</p>
          </div>
      </div>
    </div>
  </div>
  {{-- Pencarian Kerja Akhir --}}


  {{-- Kategori awal --}}
  <div class="container ">
    <h1 class="mt-5 fw-bold fs-3 ms-5" >Kategori Pekerjaan Yang Paling Banyak Diminati</h1>
    <div class="row">
        <div class="col-4 mt-5" >
          <div class="container border rounded shadow kategori" style="width: 320px; height: 230px;">
              <div class="rounded-circle d-flex align-items-center justify-content-center m-auto mt-5" style="width: 55px; height: 55px; background: rgba(250, 138, 0, 0.5);">
                <img src="{{ asset('image') }}/teknologi.png" alt="teknologi">
              </div>
              <div class="text-center mt-4">
                <p class="fw-bold">IT <br>
                  (21097) </p>
              </div>
          </div>
        </div>
        <div class="col-4 mt-5">
          <div class="container border rounded shadow kategori" style="width: 320px; height: 230px;">
              <div class="rounded-circle d-flex align-items-center justify-content-center m-auto mt-5" style="width: 55px; height: 55px; background: rgba(250, 138, 0, 0.5);">
                <img src="{{ asset('image') }}/administrator.png" alt="administrator">
              </div>
              <div class="text-center mt-4">
                <p class="fw-bold">Administration <br>
                  (7180) </p>
              </div>
          </div>
        </div>
        <div class="col-4 mt-5">
          <div class="container border rounded shadow kategori" style="width: 320px; height: 230px;">
              <div class="rounded-circle d-flex align-items-center justify-content-center m-auto mt-5" style="width: 55px; height: 55px; background: rgba(250, 138, 0, 0.5);">
                <img src="{{ asset('image') }}/enginer.png" alt="enginner">
              </div>
              <div class="text-center mt-4">
                <p class="fw-bold">Engineering <br>
                  (2904) </p>
              </div>
          </div>
        </div>
        <div class="col-4 mt-4">
          <div class="container border rounded shadow kategori" style="width: 320px; height: 230px;">
              <div class="rounded-circle d-flex align-items-center justify-content-center m-auto mt-5" style="width: 55px; height: 55px; background: rgba(250, 138, 0, 0.5);">
                <img src="{{ asset('image') }}/manufacturing.png" alt="Manufacturing">
              </div>
              <div class="text-center mt-4">
                <p class="fw-bold">Manufacturing <br>
                  (12097) </p>
              </div>
          </div>
        </div>
        <div class="col-4 mt-4">
          <div class="container border rounded shadow kategori" style="width: 320px; height: 230px;">
              <div class="rounded-circle d-flex align-items-center justify-content-center m-auto mt-5" style="width: 55px; height: 55px; background: rgba(250, 138, 0, 0.5);">
                <img src="{{ asset('image') }}/Finance.png" alt="Finance">
              </div>
              <div class="text-center mt-4">
                <p class="fw-bold">Finance <br>
                  (9827) </p>
              </div>
          </div>
        </div>
        <div class="col-4 mt-4">
          <div class="container border rounded shadow kategori" style="width: 320px; height: 230px;">
              <div class="rounded-circle d-flex align-items-center justify-content-center m-auto mt-5" style="width: 55px; height: 55px; background: rgba(250, 138, 0, 0.5);">
                <img src="{{ asset('image') }}/education.png" alt="Education">
              </div>
              <div class="text-center mt-4">
                <p class="fw-bold">Education <br>
                  (7643) </p>
              </div>
          </div>
        </div>
    </div>
  </div>
  {{-- Kategori Akhir --}}

  {{-- Tentang Kami Awal --}}
    <div class="tentang-kami mt-5">
      <div class="container">
      <div class="row">
        <h1 class="ms-5 mt-5 fw-bold text-white">Tentang Kami</h1>
          <div class="col-md-2 ms-5 mt-3 me-5">
            <img src="{{ asset('image') }}/logo-putih.png" alt="">
          </div>
          <div class="col-md-8 text-white " style="margin-top: 40px;">
            <p class="fw-700 fs-3 ms-5 lh-base" style="width: 1000px">Maisyah.id merupakan platform lowongan kerja muslim <br>
              nomor 1 di Indonesia. Berdiri sejak tahun 2018 di Jakarta. <br>
            <b>Berdedikasi penuh untuk muslimin agar mudah mendapatkan <br>
              pekerjaan impian yang memudahkan diri dalam beribadah !</b></p>
          </div>
        </div>
      </div>
    </div>
  {{-- Tentang Kami Akhir --}}
  
  
  {{-- Inspirasi Kasir Awal --}}
  <div class="container mt-5">
    <div class="row">
      <div class="col-4">
        <p class="fs-5 fw-bold ms-5 mt-5">Inspirasi Karir</p>
        <div class="card ms-5 mt-5 border rounded shadow " style="width: 370px; height: 151px; ">
          <div class="row g-0" role="button">
            <div class="col-md-4">
              <img src="{{ asset('image') }}/Frame1.png" class="rounded" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <p class="card-text ms-3 fw-bold" style="font-size: 16px">Ingin Jadi KOL Specialist? <br>
                  Ini Tugas dan Gajinya!</p>
                <p class="text-muted ms-3 mt-5 fw-bold fst-italic">Oleh Masdiah Hasim</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4" style="margin-top: 78px;">
        <div class="card ms-5 mt-5 border rounded shadow " style="width: 370px; height: 151px; ">
          <div class="row g-0" role="button">
            <div class="col-md-4">
              <img src="{{ asset('image') }}/Frame2.png" class="rounded" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <p class="card-text ms-3 fw-bold" style="font-size: 16px; margin-top: -8px;">Keahlian Yang Banyak <br>
                  Dibutuhkan Oleh <br>
                  Perusahaan <br>
                  Startup Teknologi</p>
                <p class="text-muted ms-3 fw-bold fst-italic" style="margin-top: -8px;">Oleh Noser</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4" style="margin-top: 78px;">
        <div class="card ms-5 mt-5 border rounded shadow " style="width: 370px; height: 151px; ">
          <div class="row g-0" role="button">
            <div class="col-md-4">
              <img src="{{ asset('image') }}/Frame3.png" class="rounded" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <p class="card-text ms-3 fw-bold" style="font-size: 16px; margin-top: -8px;">Kerja di Bank: Jenis <br>
                  Pekerjaan, Posisi dan <br>
                  Tugasnya</p>
                <p class="text-muted ms-3 fw-bold fst-italic" style="margin-top: 32px;">Oleh Ilham Hendra</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4" style="margin-top: 28px;">
        <div class="card ms-5 border rounded shadow " style="width: 370px; height: 151px; ">
          <div class="row g-0" role="button">
            <div class="col-md-4">
              <img src="{{ asset('image') }}/Frame4.png" class="rounded" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <p class="card-text ms-3 fw-bold" style="font-size: 16px">ORVI : Satu Kandidat <br>
                  hanya Butuh Enam Menit!</p>
                <p class="text-muted ms-3 mt-5 fw-bold fst-italic">Oleh Maisyah.id</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4" style="margin-top: 28px;">
        <div class="card ms-5 border rounded shadow " style="width: 370px; height: 151px; ">
          <div class="row g-0" role="button">
            <div class="col-md-4">
              <img src="{{ asset('image') }}/Frame5.png" class="rounded" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <p class="card-text ms-3 fw-bold" style="font-size: 16px; margin-top: -8px;">Dapatkan Pekerjaan melalui <br>
                  Job Fair, Ini Tipsnya!</p>
                <p class="text-muted ms-3 fw-bold fst-italic" style="margin-top: 32px;">Oleh Maisyah.id</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4" style="margin-top: 28px;">
        <div class="card ms-5 border rounded shadow " style="width: 370px; height: 151px; ">
          <div class="row g-0" role="button">
            <div class="col-md-4">
              <img src="{{ asset('image') }}/Frame6.png" class="rounded" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <p class="card-text ms-3 fw-bold" style="font-size: 16px; margin-top: -8px;">Mengapa Saya Masih <br>
                  Belum Dapat Panggilan <br>
                  Kerja Dari Lamaran Saya ?</p>
                <p class="text-muted ms-3 fw-bold fst-italic" style="margin-top: 32px;">Oleh Nur Insan</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection