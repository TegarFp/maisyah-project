@extends('layout.admin')
@section('judul', 'Create Data')

@section('breadcrumb', 'Create')
    
@section('content')

<div class="col-md-12">
  <div class="card">
    <div id="flash" data-flash="{{ session()->get('success') }}"></div>
    <div class="card-header">
      <form action="{{ route('lowongans.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h4 class="mb-4" style="font-weight: 600;">SILAKAN ISI DATA DIBAWAH</h4>
            <div class="row">
            <div class="col-lg-4 mb-4">
              <label for="file">Gambar Perusahaan</label>
              <div class="input-group ">
                <input type="file" name="image" class="form-control-file" placeholder="Masukkan Gambar Anda">
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <label for="file">Nama Pekerjaan</label>
              <div class="input-group ">
                <input type="text" name="judul_pekerjaan" class="form-control" placeholder="Masukkan Nama Pekerjaan">
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <label for="file">Nama PT</label>
              <div class="input-group ">
                <input type="text" name="pt_id" class="form-control" placeholder="Masukkan Nama PT">
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <label for="file">Status</label>
              <div class="input-group ">
                <input type="text" name="status_pekerjaan" class="form-control" placeholder="Masukkan Status Anda">
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <label for="file">Gaji Awal</label>
              <div class="input-group ">
                <input type="text" name="start_salary" class="form-control" placeholder="Masukkan Gaji Awal Anda">
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <label for="file">Gaji Akhir</label>
              <div class="input-group ">
                <input type="text" name="end_salary" class="form-control" placeholder="Masukkan Gaji Akhir Anda">
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <label for="file">Pengalaman Kerja</label>
              <div class="input-group ">
                <input type="text" name="expected_experience" class="form-control" placeholder="Masukkan Pengalaman Kerja Anda">
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <label for="file">Fungsi Kerja</label>
              <div class="input-group ">
                <input type="text" name="fungsi_kerja" class="form-control" placeholder="Masukkan Fungsi Kerja">
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <label for="file">Level Bidang</label>
              <div class="input-group ">
                <input type="text" name="level" class="form-control" placeholder="Masukkan Level Bidang Anda">
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <label for="text">Lulusan</label>
              <div class="input-group ">
                <input type="text" name="lulusan" class="form-control" placeholder="Masukkan Lulusan Anda">
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <label for="file">Deskripsi</label>
              <div class="input-group ">
                <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi Anda"></textarea>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <label for="file">Kualifikasi</label>
              <div class="input-group ">
                <input type="text" name="kualifikasi" class="form-control" placeholder="Masukkan Kualifikasi">
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <label for="file">Benefits</label>
              <div class="input-group ">
                <input type="text" name="benefits" class="form-control" placeholder="Masukkan Benefits">
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <label for="file">Tentang Perusahaan</label>
              <div class="input-group ">
                <input type="text" name="about" class="form-control" placeholder="Masukkan Tentang Perusahaan">
              </div>
            </div>
            <div class="row m-auto">
              <div class="d-flex justify-content-end">
                <a href="/lowongans" class="btn text-white " style="background: #31AAE0;">Back</a>
                <button class="btn btn-success" style="margin-left: 10px;">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  tinymce.init({
  selector: '#deskripsi',
  height: 300,
  menubar: false,
  plugins: [
    'advlist lists'
  ],
  toolbar: 'undo redo | bold italic | numlist bullist',
});
</script>


@endsection