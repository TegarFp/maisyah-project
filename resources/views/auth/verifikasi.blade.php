@extends('layout.main1')

@section('verif')
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-info">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('image') }}/logo.png" alt="Logo"  class="d-inline-block align-text-top">
    </a>
  </div>
</nav>

  {{-- Login Awal --}}
  <div class="container d-flex justify-content-center mt-5">
    <div class="card border rounded shadow col-4 login-card">
      <div class="container row">
        <p class="fw-bold fs-3 mt-5 text-center">Verifikasi</p>
        <p class="fw-bold fs-6 text-center" style="color: #14445D;">Cek email Mu dan masukkan <b style="color: #000000;">Kode Verifikasi</b></p>
        <form class="container col-11 mt-3" >
        <div class="mb-2 ">
          <div class="input-group border-bottom border-info border-1 rounded-3">
            <input type="text" class="col-12 border-0 rounded-1 text-center" style="height: 45px" id="exampleInputEmail1" placeholder="Kode Verifikasi">
          </div>
        </div>
        <div class="col-12 d-grid gap-2">
          <button class="btn text-white mt-3 fw-bold" type="submit" style="background-color: #31AAE0;">Submit</button>
        </div>
        <div class="text-center mt-3 mb-5">
          <a href="#" class="fw-300 text-dark " style="text-decoration: none;">Tidak dapat kode? <b style="color: #FA8A00;">Kirim Lagi ?</b></a>
        </div>
      </form>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 50 1300 250"><path fill="#42B1E2BF" fill-opacity="1" d="M0,96L60,85.3C120,75,240,53,360,80C480,107,600,181,720,192C840,203,960,149,1080,112C1200,75,1320,53,1380,42.7L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
  {{-- Akhir --}}
@endsection