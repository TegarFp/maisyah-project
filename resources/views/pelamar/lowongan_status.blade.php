@extends('layout.main2')

@section('content')

    {{-- Awal Lamaran --}}
    @foreach ($lamarans as $lamaran)  
      <p class="fw-bold fs-6 mt-3">{{ $loop->iteration }} Lamaran</p>
      <div class="border border-secondary border-2 rounded mt-4" style="height: 400px;">
        <div class="d-flex">
          <div class="col-4 p-4">
            <img src="{{ asset('image/' . $lamaran->pekerjaan->image) }}" class="img-fluid rounded-start" width="150" height="100" alt="">
          </div>
          <div class="col-3 mt-3">
            <p class="fw-bold fs-5">{{ $lamaran->pekerjaan->judul_pekerjaan }}</p>
            <p class="text-dark" style="font-weight: 600; margin-top: -10px;">{{ $lamaran->pt_id }}</p>
            <p style="color: #000000; margin-top: -7px;">{{  $lamaran->pekerjaan->created_at->locale('id')->diffForHumans() }}</p>
          </div>
          <div class="col-md-4 ms-auto p-4 text-center  fw-bold d-flex">
            <div class="border-0"  style="color: darkorange; background: rgba(250, 138, 0, 0.1); width: 200px; height: 50px; ">
              <p class="fw-bold mt-2" style="font-size: 17px;">
                @switch($lamaran->status)
                @case('aktif')
                    Lamaran Terkirim
                    @break
            
                @case('non-aktif')
                    Tidak Lolos
                    @break
                @case('pending')
                    Dalam Review
                    @break
            
                @default

              @endswitch
            </p>
            </div>
          </div>
        </div>
        <div class="col-6 p-4">
          <div class="input-group" style="min-width: 400px; max-width: 700px;">
            <i class="bi bi-buildings-fill fa-lg mt-1" style="color: #14445d;"></i>
            <p class="ms-3" style="font-size: 18px; font-weight: 600;">{{ $lamaran->pekerjaan->status_pekerjaan }}</p>
          </div>
          <div class="input-group" style="min-width: 400px; max-width: 700px;">
            <i class="bi-solid bi-coin fa-lg mt-1" style="color: #14445d;"></i>
            <p class="ms-3" style="font-size: 18px; font-weight: 600;">Rp. {{ $lamaran->pekerjaan->start_salary }} - {{ $lamaran->pekerjaan->end_salary }} / bulan</p>
        </div>
        <div class="input-group" style="min-width: 400px; max-width: 700px;">
            <i class="bi bi-bag-fill fa-lg mt-1" style="color: #14445d;"></i>
            <p class="ms-3" style="font-size: 18px; font-weight: 600;">Pengalaman {{ $lamaran->pekerjaan->expected_experience }}</p>
        </div>
        </div>
      </div>
      @endforeach
    {{-- Akhir Lamaran --}}
  

<br><br>
@endsection