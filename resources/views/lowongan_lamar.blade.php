@extends('layout.main')

@section('content')
    <div class="background1">
        <div class="container">
            <div class="row">
                <div class="col-2" style="margin-top: 110px;">
                    <img src="{{ asset('image/' . $pekerjaan->image) }}" alt="" style="width: 184px; height: 201px;">
                </div>
                <div class="col">
                    <div class="col text-white d-flex justify-content-between" style="margin-top: 110px; margin-left: 5px;">
                        <div>
                            <p class="fw-bold fs-5">{{ $pekerjaan->judul_pekerjaan }}</p>
                            <p class="text-white" style="font-weight: 600; margin-top: -10px;">{{ $pekerjaan->pt_id }}</p>
                            <div class="input-group">
                                <i class="bi bi-buildings-fill fa-lg mt-3" style="color: #ffffff;"></i>
                                <p class="ms-3" style="font-size: 16px; font-weight: 600; margin-top: 13px;">{{ $pekerjaan->status_pekerjaan }}</p>
                                <i class="bi-solid bi-coin fa-lg mt-3" style="color: #ffffff; margin-left: 30px;"></i>
                                <p class="ms-3" style="font-size: 16px; font-weight: 600; margin-top: 13px;">Rp. {{ $pekerjaan->start_salary }} - {{ $pekerjaan->end_salary }} / bulan</p>
                                <i class="bi bi-bag-fill fa-lg mt-3" style="color: #ffffff; margin-left: 30px;"></i>
                                <p class="ms-3" style="font-size: 16px; font-weight: 600; margin-top: 13px;">Pengalaman {{ $pekerjaan->expected_experience }}</p>
                            </div>
                            <div class="input-gruop text-dark d-flex">
                                <i class="fa-regular fa-clock fa-lg" style="margin-top: 28px;"></i>
                                <p class="ms-3" style="font-weight: 700; font-size: 13px; margin-top: 18px;">Ditayangkan</p>
                                <p class="ms-3" style="font-weight: 700; font-size: 13px; margin-top: 18px;">{{  $pekerjaan->created_at->locale('id')->diffForHumans() }}</p>
                            </div>
                        </div>
                        <div class="me-4">
                            <button class="btn text-white" style="width: 120px; background-color: #31AAE0;" data-bs-toggle="modal" data-bs-target="#uploadModal">Lamar</button>
                            <div class="input-group justify-content-center mt-4" role="button">
                                <i class="fa-regular fa-bookmark fa-lg me-3" style="margin-top: 14px;"></i>
                                <a href="#" class="text-white"
                                    style="text-decoration: none; font-weight: 700;">Simpan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- 2 --}}

    <div class="container">
        <div class="row">
            <div class="col-2 text-dark" style="margin-top: 90px; line-height: 17.5px; ">
                <hr class="border-4" style="width: 180px;">
                <p class="fw-bold" style="font-weight: 700;">Fungsi Kerja</p>
                <p class="text-muted" style="font-size: 15px; width: 130px;">{{ $pekerjaan->fungsi_kerja }}</p>
                <hr style="width: 180px;">
                <p class="fw-bold" style="font-weight: 700;">Level</p>
                <p class="text-muted" style="font-size: 15px;">{{ $pekerjaan->level }}</p>
                <hr style="width: 180px;">
                <p class="fw-bold" style="font-weight: 700;">Pengalaman</p>
                <p class="text-muted" style="font-size: 15px;">Minimal {{ $pekerjaan->expected_experience }}</p>
                <hr style="width: 180px;">
                <p class="fw-bold" style="font-weight: 700;">Lulusan</p>
                <p class="text-muted" style="font-size: 15px;">{{ $pekerjaan->lulusan }}</p>
                <hr style="width: 180px;">
                <a href="" class="fw-bold" style="font-size: 15px; text-decoration: none; color: #0091D1;">Do you want us to keep you updated on similar opportunities?</a>
                <butto class="btn btn-outline-secondary mt-3">Insert your email here</butto>
                <butto class="btn text-white mt-3"  style="width: 180px; background-color: #31AAE0;">Keep Me Updated</butto>
            </div>
            <div class="col">
                <div class="col-12 text-dark d-flex justify-content-between" style="margin-top: 90px; margin-left: 5px;">
                    <div class="col-12">
                        <p class="fw-bold fs-5">Deskripsi Pekerjaan</p>
                        <hr>
                        <ul class="" style="line-height: 40px; font-weight: 600;">
                          @foreach ($deskripsi as $list)
                          <li>{{ $list }}</li>
                        @endforeach
                        </ul>
                        <p class="fw-bold fs-5">Kualifikasi</p>
                        <hr>
                        <ul class="" style="line-height: 40px; font-weight: 600;">
                          @foreach ($kualifikasi as $list)
                          <li>{{ $list }}</li>
                          @endforeach
                        </ul>
                        <p class="fw-bold fs-5">Benefits</p>
                        <hr>
                        <ul class="" style="line-height: 40px; font-weight: 600;">
                          @foreach ($benefits as $list)
                          <li>{{ $list }}</li>
                          @endforeach
                        </ul>
                        <p class="fw-bold fs-5">Tentang Perusahaan</p>
                        <hr>
                        <div class="justify-content-center" style="line-height: 40px; font-weight: 600; width: 750px;">
                            <p>{{ $pekerjaan->about }}.</p>
                        </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header border-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="row">
          <div class="modal-body justify-content-center">
            <div class="container col-10" style="line-height: 20px;">
              <div class="fs-5">
                <p style="font-weight: 700;">Lengkapi Dokumen</p>
                <p style="font-weight: 600;">PT Asia Harapan - Web Designer</p>
              </div>
              <!-- Form upload file -->
              <form action="{{ route('lowongan_lamar') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                <input name="pekerjaan_id" type="hidden" value="{{ $pekerjaan->id }}">
                <input name="user_id" type="hidden" value="{{ auth()->user()->id }}">
                <div class="mb-3 mt-4">
                  <label for="cvInput" class="form-label fw-bold">CV (Wajib)</label>
                  <input name="cv_path" type="file" class="form-control" id="cvInput">
                </div>
                <div class="mb-3" style="line-height: 20px;">
                  <p class="text-muted">Format PDF (max. 5MB).</p>
                  <p class="text-muted" style="margin-top: -5px;">Upload sekali saja dan kamu dapat menggunakannya untuk lamaran berikutnya</p>
                </div>
  
                <div class="mb-3 mt-3">
                  <label for="suratInput" class="form-label fw-bold">Surat Lamaran</label>
                  <p class="text-muted">Lampirkan surat lamaranmu</p>
                  <input name="surat_lamaran_path" type="file" class="form-control" id="suratInput">
                </div>
  
                <button type="submit" class="btn text-white mt-3 mb-3" style="width: 100%; height: 50px; background: #31AAE0;">Upload</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <script>
    // Fungsi untuk mengupload file
    function uploadFile() {
      // Ambil file yang diinput oleh user
      const file = document.getElementById('fileInput').files[0];
      // Lakukan operasi upload file di sini
      // ...
      // Tutup modal
      const modal = document.getElementById('uploadModal');
      const modalInstance = bootstrap.Modal.getInstance(modal);
      modalInstance.hide();
    }
  </script>

    <br><br><br><br><br><br><br><br><br><br>
@endsection
