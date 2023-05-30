@extends('layout.main1')

@section('login')
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-info">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('image') }}/logo.png" alt="Logo"  class="d-inline-block align-text-top">
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="ms-auto ">
        <ul class="navbar-nav ">
          <p class="mt-2 me-4">Belum Punya Akun?</p>
          <a href="/register"><button type="button" class="btn text-white" style="background-color: #FA8A00;">Daftar</button></a>
        </ul>
      </div>
    </div>
  </div>
</nav>

  {{-- Login Awal --}}
  <div class="container d-flex justify-content-center mt-5">
    <div class="card border rounded shadow col-5 login-card">
      <div class="container row">
      <h1 class="fw-bold fs-4 mt-5 text-center">Selamat Datang Kembali</h1>
      <form action="/login_proses" method="POST" class="container col-11 mt-3">
        @csrf
        <div class="mb-3 ">
          <label for="email" class="form-label">Email</label>
          <div class="input-group border border-1 border-dark rounded-3">
            <span class="input-group-text border-0 bg-white" id="email"><i class="fa-solid fa-envelope fa-xl"></i></span>
            <input type="email" class="form-control border-0" id="email" name="email" placeholder="Masukkan Email Anda">
          </div>
          @error('email')
          <small>{{ $message }}</small>
          @enderror
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <div class="input-group border border-1 border-dark rounded-3">
            <span class="input-group-text border-0 bg-white"><i class="fa-solid fa-lock fa-xl"></i></span>
            <input type="password" class="form-control border-0" name="password" placeholder="Masukkan Password Anda">
          </div>
          @error('password')
          <small>{{ $message }}</small>
          @enderror
        </div>
        <div class="float-end">
            <a href="#" class="fw-300 " style="text-decoration: none; color:#FA8A00;">Lupa Password ?</a>
          </div>
        <div class="col-12 d-grid gap-2 mb-5">
          <button class="btn text-white mt-4" type="submit" style="background-color: #31AAE0;">Login</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 50 1300 250"><path fill="#42B1E2BF" fill-opacity="1" d="M0,96L60,85.3C120,75,240,53,360,80C480,107,600,181,720,192C840,203,960,149,1080,112C1200,75,1320,53,1380,42.7L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
  {{-- Akhir --}}
@endsection