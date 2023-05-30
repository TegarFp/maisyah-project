@extends('layout.main1')

@section('register')
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-info">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('image') }}/logo.png" alt="Logo"  class="d-inline-block align-text-top">
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="ms-auto ">
        <ul class="navbar-nav ">
          <p class="mt-2 me-4">Belum Punya Akun?</p>
          <a href="/login"><button type="button" class="btn text-white" style="background-color: #FA8A00;">Masuk</button></a>
        </ul>
      </div>
    </div>
  </div>
</nav>

  {{-- Register Awal --}}
  <div class="container d-flex justify-content-center mt-5">
    <div class="card border rounded shadow col-5 login-card">
      <div class="container row">
        
      <h1 class="fw-bold fs-4 mt-5 mb-4 text-center">Selamat Datang di <b style="color: #31AAE0;">Maisyah.id</b></h1>
      <form action="/register_proses" method="POST" class="container col-11 mt-3" >
        @csrf
        <div class="mb-3 ">
          <label for="username" class="form-label" style="font-weight: 600;">Username</label>
          <div class="input-group border border-1 border-dark rounded-3">
            <span class="input-group-text border-0 bg-white" id="username-addon"><i class="fa-solid fa-user fa-xl"></i></span>
            <input type="text" class="form-control border-0" name="username" id="username" aria-describedby="username-addon" placeholder="Masukkan Username">
          </div>
          @error('username')
              <small>{{ $message }}</small>
          @enderror
        </div>
        <div class="mb-3 ">
          <label for="email" class="form-label" style="font-weight: 600;">Email</label>
          <div class="input-group border border-1 border-dark rounded-3">
            <span class="input-group-text border-0 bg-white" id="email-addon1"><i class="fa-solid fa-envelope fa-xl"></i></span>
            <input type="email" class="form-control border-0" id="email" name="email" aria-describedby="email-addon1" placeholder="Masukkan Email Anda">
          </div>
          @error('email')
          <small>{{ $message }}</small>
          @enderror
        </div>
        <div class="mb-3 ">
          <label for="phone" class="form-label" style="font-weight: 600;">Nomor Hp</label>
          <div class="input-group border border-1 border-dark rounded-3">
            <span class="input-group-text border-0 bg-white" id="phone-addon"><i class="fa-solid fa-phone fa-xl"></i></span>
            <input type="text" class="form-control border-0" name="phone" id="phone" aria-describedby="phone-addon" placeholder="Masukkan No Hp Anda">
          </div>
          @error('phone')
          <small>{{ $message }}</small>
          @enderror
        </div>
        <div class="mb-3">
          <label for="password" class="form-label" style="font-weight: 600;">Password</label>
          <div class="input-group border border-1 border-dark rounded-3">
            <span class="input-group-text border-0 bg-white"><i class="fa-solid fa-lock fa-xl"></i></span>
            <input type="password" class="form-control border-0" name="password" id="password" placeholder="Masukkan Password Anda">
          </div>
          @error('password')
          <small>{{ $message }}</small>
          @enderror
        </div>
        <div class="mb-3">
          <label for="password-confirm" class="form-label" style="font-weight: 600;">Ulangi Password</label>
          <div class="input-group border border-1 border-dark rounded-3">
            <span class="input-group-text border-0 bg-white"><i class="fa-solid fa-lock fa-xl"></i></span>
            <input type="password" class="form-control border-0" name="password_confirmation" id="password-confirm" placeholder="Masukkan Ulang Password Anda">
          </div>
          @error('password_confirmation')
          <small>{{ $message }}</small>
          @enderror
        </div>
        <div class="mt-4 form-check">
          <input type="checkbox" class="form-check-input" style="cursor: pointer;" id="terms" name="terms">
          <label class="form-check-label" role="button" for="terms">Dengan mendaftar, saya telah membaca dan menyetujui <br>
            <b style="color: #FA8A00;">Ketentuan Penggunaan dan Kebijakan Privasi</b><br>
            Maisyah.id.</label>
        </div>
        @error('terms')
        <small><div class="alert alert-danger">{{ $message }}</div></small> 
        @enderror
        <div class="col-12 d-grid gap-2 mt-2 mb-5">
          <button class="btn text-white mt-4" type="submit" style="background-color: #31AAE0;">Daftar</button>
          <a href="" class="btn btn-outline-light mt-2" style="border:1px solid #FA8A00; color:#FA8A00;">Daftar Sebagai Perusahaan</a>
        </div>
      </form>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 50 1300 250"><path fill="#42B1E2BF" fill-opacity="1" d="M0,96L60,85.3C120,75,240,53,360,80C480,107,600,181,720,192C840,203,960,149,1080,112C1200,75,1320,53,1380,42.7L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
  {{-- Akhir --}}
@endsection