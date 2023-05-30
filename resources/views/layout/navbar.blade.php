<header class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-info fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('image') }}/logo.png" alt="Logo"  class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item me-2 menu">
          <a class="nav-link text {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
        </li>
        <li class="nav-item menu">
          <a class="nav-link me-2 text {{ request()->is('lowongan*') ? 'active' : '' }}" href="/lowongan">Cari Lowongan</a>
        </li>
        <li class="nav-item menu">
          <a class="nav-link me-2 text {{ request()->is('layanan') ? 'active' : '' }}" href="/layanan">Layanan</a>
        </li>
        <li class="nav-item menu">
          <a class="nav-link me-2  text" href="#">Hubungi Kami</a>
        </li>
      </ul>
    </div>

    @if(Auth::check())
    <div class="border rounded-pill border-1 align-items-center justify-content-center ms-auto" style="background: rgba(250, 138, 0, 0.25); max-width: 100%; min-width: 170px; height: 65px;">
      <div class="dropdown text-start ">
        <div class="input-group mt-3 border-0 justify-content-center" role="button" style="min-width: 150px; max-width: 500px; height: 50px;" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle ms-3" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
          <p class="ms-3" style="margin-top: 2px; font-weight: 700; font-size: 16px;">
            {{ collect(explode(' ', Auth::user()->username))->first() }}
          </p>
          <i class="fas fa-angle-down ms-3 me-3" style="margin-top: 7px;"></i>
        </div>
        <ul class="dropdown-menu rounded" style="min-width: 100%;" aria-labelledby="dropdownUser1">
          <li>
            <div class="input-group mt-3 border-0" role="button" style="min-width: 110px; max-width: 500px; height: 30px;" id="dropdownUser1" data-bs-toggle="dropdown1" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" class="ms-3" width="20" height="20" viewBox="0 0 448 512"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
              <a href="/dashboard" class="dropdown-item  text-decoration-none" style="margin-top: -4px; font-weight: 500; font-size: 16px; width: 100px; color: #14445D;">Profile</a>
            </div>
          </li>
          <li>
            <div class="input-group mt-3 border-0" role="button" style="min-width: 110px; max-width: 500px; height: 30px;" id="dropdownUser1" data-bs-toggle="dropdown2" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" class="ms-3" width="20" height="20" viewBox="0 0 384 512"><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM216 408c0 13.3-10.7 24-24 24s-24-10.7-24-24V305.9l-31 31c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l72-72c9.4-9.4 24.6-9.4 33.9 0l72 72c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-31-31V408z"/></svg>
              <a href="#" class="dropdown-item text-decoration-none" style="margin-top: -4px; font-weight: 500; font-size: 16px; width: 130px; color: #14445D;">Status Lamaran</a>
            </div>
          </li>
          <li>
            <div class="input-group mt-3 border-0" role="button" style="min-width: 110px; max-width: 500px; height: 30px;" id="dropdownUser1" data-bs-toggle="dropdown3" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" class="ms-3" width="20" height="20" viewBox="0 0 384 512"><path d="M0 48V487.7C0 501.1 10.9 512 24.3 512c5 0 9.9-1.5 14-4.4L192 400 345.7 507.6c4.1 2.9 9 4.4 14 4.4c13.4 0 24.3-10.9 24.3-24.3V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48z"/></svg>
              <a href="#" class="dropdown-item text-decoration-none" style="margin-top: -6px; font-weight: 500; font-size: 16px; width: 130px; color: #14445D;">Bookmarks</a>
            </div>
          </li>
          <li>
            <div class="input-group mt-3 border-0" role="button" style="min-width: 110px; max-width: 500px; height: 30px;" id="dropdownUser1" data-bs-toggle="dropdown4" aria-expanded="false">
              <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="ms-3" role="button" width="25" height="25" fill="#FF6969"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path fill="none" d="M0 0h24v24H0z"></path> <path d="M5 2h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm4 9V8l-5 4 5 4v-3h6v-2H9z"></path> </g> </g></svg>
              <a href="logout" class="dropdown-item text-decoration-none" style="margin-top: -6px; font-weight: bold; font-size: 16px; width: 120px; color: #FF6969;">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>

    @else
      <div class="ms-auto ">
        <ul class="navbar-nav ">
          <a href="/login"><button type="button" class="btn btn-outline-info me-4">Masuk</button></a>
          <a href="/register"><button type="button" class="btn me-4 text-white" style="background-color: #FA8A00;">Daftar</button></a>
          <a href="#"><button type="button" class="btn btn-info text-white">Perusahaan</button></a>
        </ul>
      </div>
      @endif
    </div>
  </div>
</header>
