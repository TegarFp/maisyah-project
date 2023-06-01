@extends('layout.admin')
@section('judul', 'Lamaran')

@section('breadcrumb', 'Lamaran')
    
@section('content')

    <div class="col-md-12">
      <div class="card">
        <div id="flash" data-flash="{{ session()->get('success') }}"></div>
        <div class="card-header">
          <div class="row">
            <div class="col-md-6 " style="margin-top: 2px;">
              <label for="">Export</label><br>
              <form action="" method="">
                <div class="input-group border rounded align-middle" style="width: 570px;">
                  <input type="search" class="form-control border-0" name="search" placeholder="Search" aria-label="Search" >
                  <i class="fa fa-search fa-2xl" id="search-icon" style="margin-right: 3px; margin-top: 10px; width: 20px; cursor: pointer;"></i>
                </div>
              </div>
            </form>
            <div class="col-md-2">
              <label for="">Export</label><br>
              <a class="btn btn-success" name="button"><i class="fa fa-file-excel">&ensp; Excel</i></a>
              <a class="btn btn-danger" name="button"><i class="fa fa-file-pdf">&ensp; Pdf</i></a>
            </div>
            <div class="col-md-2 mt-2">
              <br>
              <a style="width: 170px" href="" class="btn btn-info">REFRESH</a>
            </div>
            <div class="col-md-2 mt-2">
              <br>
              <button style="width: 170px;" data-toggle="modal" data-target="#addModal" class="btn btn-default" onclick="window.location='{{ url('/lowongans/create') }}'">
                <i class="fa fa-plus"></i> &ensp; Create
              </button>
            </div>
            </div>
          </div>
          <div class="card-body">
            @if(Session::has('success'))
                <div class="alert alert-success">
                  {{ Session::get('success') }}
                </div>
            @endif
            <table class="table bordered">
              <thead style="background-color: #31AAE0;">
                <tr class="text-white">
                  <th>No</th>
                  <th>Image</th>
                  <th>Nama Pekerjaan</th>
                  <th>Nama Account</th>
                  <th>Status</th>
                  <th>Status Action</th>
                  <th class="text-center" style="width: 80px;">Action</th>
                </tr>
              </thead>
              <tbody>
                {{-- @if($lamaran->count() > 0) --}}
                @foreach ($lamarans as $lamaran)                
                <tr>
                  <td class="align-middle">{{ $loop->iteration }}</td>
                  <td class="align-middle">
                    <img src="{{ asset('image/'. $lamaran->pekerjaan->image) }}" alt="" style="width: 40px;">
                  </td>
                  <td class="align-middle">{{ $lamaran->pekerjaan->judul_pekerjaan }}</td>
                  <td class="align-middle">{{ $lamaran->user->username }}</td>
                  <td class="align-middle">
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
                  </td>
                  <td class="align-middle" >
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle btn-sm" style="width: 100px;" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Action
                      </button>
                      <ul class="dropdown-menu" style="min-width: 100%;">
                          <li>
                              <form action="/lowongan_status/{{ $lamaran->id }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="aktif" name="status">
                                  <button type="submit" class="dropdown-item"><i data-feather="power"
                                          class="text-danger"></i>
                                      Terkirim</button>
                              </form>
                          </li>
                          <li>
                              <form action="/lowongan_status/{{ $lamaran->id }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="non-aktif" name="status">
                                  <button type="submit" class="dropdown-item" href="">
                                      <i data-feather="power" class="text-success"></i>
                                      Ditolak
                                  </button>
                              </form>
                          </li>
                          <li>
                              <form action="/lowongan_status/{{ $lamaran->id }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="pending" name="status">
                                  <button type="submit" class="dropdown-item" href="">
                                      <i data-feather="power" class="text-success"></i>
                                      Dalam Review
                                  </button>
                              </form>
                          </li>
                      </ul>
                  </div>  
                  </td>
                  <td class="align-middle">
                    
                    <div class="dropdown">
                      <button class="btn btn-warning dropdown-toggle btn-sm" style="width: 100px;" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Action
                      </button>
                      <ul class="dropdown-menu text-center" style="min-width: 100%;">
                          <li>
                            <a href="{{ route('dashboard', $lamaran->id) }}" class="btn dropdown-item">Detail</a>
                          </li>
                          <li>
                            <form action="{{ route('dashboard', $lamaran->id) }}" method="POST" class="dropdown-item" onsubmit="return confirm('Apakah Anda Ingin Delate ini?')">
                              @csrf
                              @method('DELETE')
                              <button class="btn">Delete</button>
                            </form>
                          </li>
                      </ul>
                    </div>  
                  </td>
                </tr>
                @endforeach
                {{-- @else
                <tr>
                  <td class="text-center" colspan="13">Pekerjaan Not Found</td>
                </tr>
                @endif --}}
              </tbody>
            </table>
            <div class="mt-4">
              {{-- {{ $data->withQueryString()->links() }} --}}
            </div>
          </div>
        </div>
      </div>
    </div>

    
    
@endsection