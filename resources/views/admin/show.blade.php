@extends('layout.admin')
@section('judul', 'Show')

@section('breadcrumb', 'Show')
    
@section('content')

    <div class="col-md-12">
      <div class="card">
        <div id="flash" data-flash="{{ session()->get('success') }}"></div>
          <div class="card-body">
            <table class="table bordered">
              <thead style="background-color: #31AAE0;">
                <tr class="text-white">
                  <th>No</th>
                  <th>Nama Account</th>
                  <th>Berkas Cv</th>
                  <th>Berkas Lamaran</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($lamarans as $lamaran)                    
                <tr>
                  <td class="align-middle">{{ $loop->iteration }}</td>
                  <td class="align-middle">{{ $lamaran->user->username }}</td>
                  <td class="align-middle">{{ $lamaran->cv_path }}</td>
                  <td class="align-middle">{{ $lamaran->surat_lamaran_path }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class=" d-flex justify-content-end">
              <a href="/dashboard" class="btn text-white " style="background: #31AAE0;">Back</a>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection