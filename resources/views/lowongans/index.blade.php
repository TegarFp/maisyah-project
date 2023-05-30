@extends('layout.admin')
@section('judul', 'Lowongan')

@section('breadcrumb', 'Lowongan')
    
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
                  <th>Nama PT</th>
                  <th>Status</th>
                  <th>Start_Salary</th>
                  <th>End_Salary</th>
                  <th>Pengalaman</th>
                  <th>Tanggal Ditayangkan</th>
                  <th class="text-center" style="width: 80px;">Action</th>
                </tr>
              </thead>
              <tbody>
                @if($pekerjaans->count() > 0)
                @foreach ($pekerjaans as $row)                    
                <tr>
                  <td class="align-middle">{{ $loop->iteration }}</td>
                  <td class="align-middle">
                    <img src="{{ asset('image/'. $row->image) }}" alt="" style="width: 40px;">
                  </td>
                  <td class="align-middle">{{ $row->judul_pekerjaan }}</td>
                  <td class="align-middle">{{ $row->pt_id }}</td>
                  <td class="align-middle">{{ $row->status_pekerjaan }}</td>
                  <td class="align-middle">{{ $row->start_salary }}</td>
                  <td class="align-middle">{{ $row->end_salary }}</td>
                  <td class="align-middle">{{ $row->expected_experience }}</td>
                  <td class="align-middle">{{ $row->created_at }}</td>
                  <td class="align-middle">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="{{ route('lowongans.show', $row->id) }}" type="button" class="btn btn-secondary rounded">Detail</a>
                      <a href="{{ route('lowongans.edit', $row->id) }}" type="button" class="btn btn-warning rounded" style="margin-right: 10px; margin-left:10px;">Edit</a>
                      <form action="{{ route('lowongans.destroy', $row->id) }}" method="POST" type="button" class="btn btn-danger rounded p-0" onsubmit="return confirm('Apakah Anda Ingin Delate ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-0">Delete</button>
                      </form>
                    </div>
                  </td>
                </tr>
                @endforeach
                @else
                <tr>
                  <td class="text-center" colspan="13">Pekerjaan Not Found</td>
                </tr>
                @endif
              </tbody>
            </table>
            <div class="mt-4">
              {{ $pekerjaans->withQueryString()->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>

    
    
@endsection