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
                  <th>Fungsi</th>
                  <th>Level</th>
                  <th>Lulusan</th>
                  <th>Deskripsi</th>
                  <th>Kualifikasi</th>
                  <th>Benefits</th>
                  <th>About</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-middle">{{ $pekerjaan->id }}</td>
                  <td class="align-middle">{{ $pekerjaan->fungsi_kerja }}</td>
                  <td class="align-middle">{{ $pekerjaan->level }}</td>
                  <td class="align-middle">{{ $pekerjaan->lulusan }}</td>
                  <td class="align-middle">
                    <ul>
                      @foreach ($deskripsi as $list)
                          <li>{{ $list }}</li>
                      @endforeach
                    </ul>
                  </td>
                  <td class="align-middle">
                    <ul>
                      @foreach ($kualifikasi as $list)
                          <li>{{ $list }}</li>
                      @endforeach
                    </ul>
                  </td>
                  <td class="align-middle">
                    <ul>
                      @foreach ($benefits as $list)
                          <li>{{ $list }}</li>
                      @endforeach
                    </ul>
                  </td>
                  <td class="align-middle">{{ $pekerjaan->about }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class=" d-flex justify-content-end">
          <a href="/lowongans" class="btn text-white " style="background: #31AAE0;">Back</a>
        </div>
      </div>
    </div>

@endsection