@extends('layout.main')

@section('content')
    {{-- Awal Search --}}
    <div class="background">
        <div class="container">
            <div class="row align-items-center m-auto " style="width: 1000px; height: 250px; top: 100px;">
                <div class="col-3 " style="width: 330px; cursor: pointer">
                    <form action="" method="">                    
                        <div class="input-group border border-1 rounded-3 shadow">
                            <span class="input-group-text border-0 bg-white"><i class="bi bi-search fa-lg" style="color: #31aae0;"></i></span>
                            <input type="search"  name="search"  aria-label="Search" class="form-control border-0" style="width: 100px; height: 60px;"
                                placeholder="Jabatan, kata kunci, Perusahaan">
                        </div>
                    </form>
                </div>
                <div class="col-3" style="width: 320px; cursor: pointer">
                    <form action="" method="">                    
                    <div class="input-group border border-1 rounded-3 shadow">
                        <span class="input-group-text border-0 bg-white"><i class="bi bi-geo-alt fa-lg"
                                style="color: #31aae0;"></i></span>
                        <input type="search" name="search"  aria-label="Search" class="form-control border-0" style="width: 100px; height: 60px;"
                            placeholder="Daerah, Kota atau Kabupaten">
                    </div>
                    </form>
                </div>
                <div class="col-3" style="width: 320px; cursor: pointer">
                    <form action="" method="">
                        <div class="input-group border border-1 rounded-3 shadow">
                            <span class="input-group-text border-0 bg-white"><i class="bi bi-bag fa-lg"
                                    style="color: #31aae0;"></i></span>
                            <input type="search" name="search"  aria-label="Search" class="form-control border-0" style="width: 100px; height: 60px;"
                                placeholder="Semua Spesialisasi Pekerjaan">
                        </div>
                    </form>
                </div>
                <div class="col-3 " style="width: 30px">
                    <form class="d-flex">
                        <button class="btn btn-outline-info btn-lg border-white text-white btn-cari"
                            style="width: 300px; height: 60px;">Cari</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    {{-- Akhir Search --}}

    {{-- Awal Gaji --}}
    <div class="container " style="margin-top: 40px;">
        <div class="d-flex justify-content-center">
            <div class="">
                <div class="border rounded border-1 align-items-center justify-content-center me-3"
                    style="background: rgba(49, 170, 224, 0.5);border: 1px solid #31AAE0; width: 200px; height: 65px; top:">
                    <div class="dropdown text-start text-white ">
                        <div class="input-group mt-3 border-0 justify-content-center" role="button" style="min-width: 150px; max-width: 500px; height: 50px;" id="dropdownUser1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <p class="ms-3" style="margin-top: 2px; font-weight: 700; font-size: 16px;">
                                Gaji
                            </p>
                            <i class="fas fa-angle-down ms-3 me-3" style="margin-top: 7px;"></i>
                        </div>
                        <ul class="dropdown-menu rounded" style="min-width: 100%;" aria-labelledby="dropdownUser1">
                            @foreach($pekerjaans as $item)
                            <li><a href="#" class="dropdown-item  text-decoration-none" style="margin-top: -4px; font-weight: 500; font-size: 16px; width: 100%; color: #14445D;">{{ $item->start_salary}} - {{ $item->end_salary}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="border rounded border-1 align-items-center justify-content-center me-3"
                    style="background: rgba(49, 170, 224, 0.5);border: 1px solid #31AAE0; width: 190px; height: 65px; top:">
                    <div class="dropdown text-start text-white ">
                        <div class="input-group mt-3 border-0" role="button"
                            style="min-width: 150px; max-width: 500px; height: 50px;" id="dropdownUser1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <p class="ms-3" style="margin-top: 2px; font-weight: 700; font-size: 16px;">
                                Jenis Pekerjaan
                            </p>
                            <i class="fas fa-angle-down ms-3 me-3" style="margin-top: 7px;"></i>
                        </div>
                        <ul class="dropdown-menu rounded" style="min-width: 100%;" aria-labelledby="dropdownUser1">
                            @foreach($pekerjaans as $item)
                            <li><a href="#" class="dropdown-item  text-decoration-none"
                                    style="margin-top: -4px; font-weight: 500; font-size: 16px; width: 100%; color: #14445D;">{{ $item->judul_pekerjaan }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="border rounded border-1 align-items-center justify-content-center m-auto"
                    style="background: rgba(49, 170, 224, 0.5);border: 1px solid #31AAE0; border-radius: 4px; width: 230px; height: 65px; top:">
                    <div class="dropdown text-start text-white">
                        <div class="input-group mt-3 border-0" role="button"
                            style="min-width: 150px; max-width: 500px; height: 50px;" id="dropdownUser1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <p class="ms-3" style="margin-top: 2px; font-weight: 700; font-size: 16px;">
                                Tanggal ditayangkan
                            </p>
                            <i class="fas fa-angle-down ms-3 me-3" style="margin-top: 7px;"></i>
                        </div>
                        <ul class="dropdown-menu rounded" style="min-width: 100%;" aria-labelledby="dropdownUser1">
                            @foreach ($pekerjaans as $item)
                            <li>
                                <a href="#" class="dropdown-item  text-decoration-none" style="margin-top: -4px; font-weight: 500; font-size: 16px; width: 100%; color: #14445D;">{{  $item->created_at->locale('id')->diffForHumans() }}</a></li>
                            <li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Awal Gaji --}}


    @foreach ($pekerjaans as $row)
    <div class="container mt-5">
        <div class="card m-auto mt-5" style="width: 750px;">
            <div class="card-body rounded-2" style="border: 1px solid #14445D;">
                <div class="row g-3">
                    <div class="col-md-3">
                        <img src="{{ asset('image/' . $row->image) }}" class="img-fluid rounded-start" alt="">
                    </div>
                    <div class="col-md-3" style="margin-left: -20px;">
                        <p class="fw-bold fs-5">{{ $row->judul_pekerjaan }}</p>
                        <p class="text-dark" style="font-weight: 600; margin-top: -10px;">{{ $row->pt_id }}</p>
                        <p style="color: #000000; margin-top: -7px;">{{  $row->created_at->locale('id')->diffForHumans() }}</p>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <div class="input-group">
                                <i class="bi bi-buildings-fill fa-lg mt-1" style="color: #14445d;"></i>
                                <p class="ms-3" style="font-size: 18px; font-weight: 600;">{{ $row->status_pekerjaan }}</p>
                            </div>
                            <div class="input-group">
                                <i class="bi-solid bi-coin fa-lg mt-1" style="color: #14445d;"></i>
                                <p class="ms-3" style="font-size: 18px; font-weight: 600;">Rp. {{ $row->start_salary }} - {{ $row->end_salary }} / bulan</p>
                            </div>
                            <div class="input-group">
                                <i class="bi bi-bag-fill fa-lg mt-1" style="color: #14445d;"></i>
                                <p class="ms-3" style="font-size: 18px; font-weight: 600;">Pengalaman {{ $row->expected_experience }}</p>
                            </div>
                            <div class="input-group" style="margin-left: 180px;">
                                <a href="{{ url('lowongan_lamar', $row->id) }}" style="color: #FA8A00; font-size: 18px; text-decoration: none;">Selengkapnya</a>
                                <i class="bi bi-arrow-right-short fa-xl" role="button" style="color: #FA8A00; margin-top: 3px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <br>
@endsection
