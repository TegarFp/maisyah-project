@extends('layout.main')

@section('content')

<div class="container " style="margin-top: 150px;">
  <div class="d-flex justify-content-center">
    <p class="fw-bold" style="font-size: 48px;">Pilih Layanan Sesuai Kebutuhan Anda</p>
  </div>
  <div class="d-flex justify-content-center text-center">
    <p class="text-dark mt-4" style="font-size: 18px;">Sesuaikan layanan dengan kebutuhan bisnis yang Anda jalankan <br>
      hubungi kami jika Anda memerlukan bantuan.</p>
  </div>
  
  {{-- 1 --}}
  <div class="row g-1 d-flex justify-content-center">
  
    <div class="col-md-4 border shadow mt-5" style="width: 330px; height: 530px; border-radius: 15px;">
      <div class="text-center mt-4" style="line-height: 26px;">
        <p style="font-size: 30px; font-weight: 700">TRIAL</p>
        <p style="font-size: 48px; font-weight: 700">GRATIS</p>
        <p style="font-size: 17px; font-weight: 700; font-family: 'Inter'; color: rgba(20, 68, 93, 0.5);">Aktif selama 7 hari</p>
      </div>  
      <div class="d-grid gap-2 col-11 mx-auto" style="color: #000000;"> 
        <button class="btn btn-primary text-white" type="button" style="background: #14445D;">Pilih Trial</button>
        <div class="input-group mt-2">
          <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000;"></i>
          <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">1 Job posting</p>
        </div>
        <div class="input-group ">
          <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000;"></i>
          <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Iklan aktif 7 hari</p>
        </div>
        <div class="input-group ">
          <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
          <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Posting di instagram & fb</p>
        </div>
        <div class="input-group ">
          <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
          <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 20px; font-weight: 400; margin-top: 1px;">Iklan tayang di seluruh channel
            kami. <br> (Website, Linkedln, <br>
            Facebook, Instagram, Telegram <br>
            dan Twitter)</p>
        </div>
        <div class="input-group ">
          <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
          <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Notifikasi lamaran masuk</p>
        </div>
        <div class="input-group ">
          <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
          <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Free design poster loker</p>
        </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Unlimited job applications</p>
          </div>
      </div>
    </div>

    {{-- 2 --}}
    
    <div class="col-md-4 border shadow mt-5 me-5 ms-5" style="width: 330px; height: 530px; border-radius: 15px;">
      <div class="text-center mt-4" style="line-height: 26px;">
        <p style="font-size: 30px; font-weight: 700; color: #6B7280;">Personal/ART</p>
        <p style="font-size: 25px; font-weight: 700; color: #6B7280;">IDR <b style="font-size: 48px; font-weight: 700;">75K</b></p>
        <p style="font-size: 17px; font-weight: 700; font-family: 'Inter'; color: rgba(20, 68, 93, 0.5);">Aktif selama 30 hari</p>
      </div>  
      <div class="d-grid gap-2 col-11 mx-auto" style="color: #000000;"> 
        <button class="btn btn-primary text-white" type="button" style="background: #6B7280; border: 1px solid #6B7280 ">Pilih Trial</button>
        <div class="input-group mt-2">
          <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000;"></i>
          <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">1 Job posting</p>
        </div>
        <div class="input-group ">
          <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000;"></i>
          <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Iklan aktif 7 hari</p>
        </div>
        <div class="input-group ">
          <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
          <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Posting di instagram & fb</p>
        </div>
        <div class="input-group ">
          <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
          <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 20px; font-weight: 400; margin-top: 1px;">Iklan tayang di seluruh channel
            kami. <br> (Website, Linkedln, <br>
            Facebook, Instagram, Telegram <br>
            dan Twitter)</p>
        </div>
        <div class="input-group ">
          <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
          <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Notifikasi lamaran masuk</p>
        </div>
        <div class="input-group ">
          <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
          <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Free design poster loker</p>
        </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Unlimited job applications</p>
          </div>
      </div>
    </div>

    {{-- 3 --}}
    
    <div class="col-md-4 border shadow mt-5 " style="width: 330px; height: 530px; border-radius: 15px;">
      <div class="text-center mt-4" style="line-height: 26px;">
        <p style="font-size: 30px; font-weight: 700; color: #25B99E;">Iklan Loker</p>
        <p style="font-size: 25px; font-weight: 700; color: #25B99E;">IDR <b style="font-size: 48px; font-weight: 700;">95K</b></p>
        <p style="font-size: 17px; font-weight: 700; font-family: 'Inter'; color: rgba(20, 68, 93, 0.5);">Aktif selama 30 hari</p>
      </div>  
      <div class="d-grid gap-2 col-11 mx-auto" style="color: #000000;"> 
        <button class="btn btn-primary text-white" type="button" style="background: #25B99E; border: 1px solid #25B99E ">Pilih Trial</button>
        <div class="input-group mt-2">
          <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000;"></i>
          <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">1 Job posting</p>
        </div>
        <div class="input-group ">
          <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000;"></i>
          <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Iklan aktif 7 hari</p>
        </div>
        <div class="input-group ">
          <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
          <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Posting di instagram & fb</p>
        </div>
        <div class="input-group ">
          <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
          <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 20px; font-weight: 400; margin-top: 1px;">Iklan tayang di seluruh channel
            kami. <br> (Website, Linkedln, <br>
            Facebook, Instagram, Telegram <br>
            dan Twitter)</p>
        </div>
        <div class="input-group ">
          <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
          <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Notifikasi lamaran masuk</p>
        </div>
        <div class="input-group ">
          <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
          <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Free design poster loker</p>
        </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Unlimited job applications</p>
          </div>
      </div>
    </div>

  </div>

    {{-- 4 --}}
    <div class="row g-1 d-flex justify-content-center">
  
      <div class="col-md-4 border shadow mt-5" style="width: 330px; height: 530px; border-radius: 15px;">
        <div class="text-center mt-4" style="line-height: 26px;">
          <p style="font-size: 30px; font-weight: 700; color: #FA8A00;">Basic</p>
          <p style="font-size: 25px; font-weight: 700; color: #FA8A00;">IDR <b style="font-size: 48px; font-weight: 700;">492K</b></p>
          <p style="font-size: 17px; font-weight: 700; font-family: 'Inter'; color: rgba(20, 68, 93, 0.5);">Aktif selama 30 hari</p>
        </div>  
        <div class="d-grid gap-2 col-11 mx-auto" style="color: #000000;"> 
          <button class="btn btn-primary text-white" type="button" style="background: #FA8A00; border: 1px solid #FA8A00">Pilih Trial</button>
          <div class="input-group mt-2">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">5 Job posting</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Iklan aktif 30 hari</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Posting di instagram & fb</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 20px; font-weight: 400; margin-top: 1px;">Iklan tayang di seluruh channel
              kami. <br> (Website, Linkedln, <br>
              Facebook, Instagram, Telegram <br>
              dan Twitter)</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Notifikasi lamaran masuk</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Free design poster loker</p>
          </div>
            <div class="input-group ">
              <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
              <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Unlimited job applications</p>
            </div>
        </div>
      </div>
  
      {{-- 5 --}}
      
      <div class="col-md-4 border shadow mt-5 me-5 ms-5" style="width: 330px; height: 530px; border-radius: 15px;">
        <div class="text-center mt-4" style="line-height: 26px;">
          <p style="font-size: 30px; font-weight: 700; color: #1D4ED8;">Standart</p>
          <p style="font-size: 25px; font-weight: 700; color: #1D4ED8;">IDR <b style="font-size: 48px; font-weight: 700;">749K</b></p>
          <p style="font-size: 17px; font-weight: 700; font-family: 'Inter'; color: rgba(20, 68, 93, 0.5);">Aktif selama 30 hari</p>
        </div>  
        <div class="d-grid gap-2 col-11 mx-auto" style="color: #000000;"> 
          <button class="btn btn-primary text-white" type="button" style="background: #1D4ED8; border: 1px solid #1D4ED8 ">Pilih Trial</button>
          <div class="input-group mt-2">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">10 Job posting</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Iklan aktif 30 hari</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Posting di instagram & fb</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 20px; font-weight: 400; margin-top: 1px;">Iklan tayang di seluruh channel
              kami. <br> (Website, Linkedln, <br>
              Facebook, Instagram, Telegram <br>
              dan Twitter)</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Notifikasi lamaran masuk</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Free design poster loker</p>
          </div>
            <div class="input-group ">
              <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
              <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Unlimited job applications</p>
            </div>
        </div>
      </div>
  
      {{-- 6 --}}
      
      <div class="col-md-4 border shadow mt-5 " style="width: 330px; height: 530px; border-radius: 15px;">
        <div class="text-center mt-4" style="line-height: 26px;">
          <p style="font-size: 30px; font-weight: 700; color: #31AAE0;">Medium</p>
          <p style="font-size: 25px; font-weight: 700; color: #31AAE0;">IDR <b style="font-size: 48px; font-weight: 700;">1.499K</b></p>
          <p style="font-size: 17px; font-weight: 700; font-family: 'Inter'; color: rgba(20, 68, 93, 0.5);">Aktif selama 30 hari</p>
        </div>  
        <div class="d-grid gap-2 col-11 mx-auto" style="color: #000000;"> 
          <button class="btn btn-primary text-white" type="button" style="background: #31AAE0; border: 1px solid #31AAE0 ">Pilih Trial</button>
          <div class="input-group mt-2">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">20 Job posting</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Iklan aktif 30 hari</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Posting di instagram & fb</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 20px; font-weight: 400; margin-top: 1px;">Iklan tayang di seluruh channel
              kami. <br> (Website, Linkedln, <br>
              Facebook, Instagram, Telegram <br>
              dan Twitter)</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Notifikasi lamaran masuk</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Free design poster loker</p>
          </div>
            <div class="input-group ">
              <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
              <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Unlimited job applications</p>
            </div>
        </div>
      </div>
      
      <div class="col-md-4 border shadow mt-5 me-auto " style="width: 330px; height: 530px; border-radius: 15px; margin-left: 109px;">
        <div class="text-center mt-4" style="line-height: 26px;">
          <p style="font-size: 30px; font-weight: 700; color: #9333EA;">Professional</p>
          <p style="font-size: 25px; font-weight: 700; color: #9333EA;">IDR <b style="font-size: 48px; font-weight: 700;">3.249K</b></p>
          <p style="font-size: 17px; font-weight: 700; font-family: 'Inter'; color: rgba(20, 68, 93, 0.5);">Aktif selama 12 bulan</p>
        </div>  
        <div class="d-grid gap-2 col-11 mx-auto" style="color: #000000;"> 
          <button class="btn btn-primary text-white" type="button" style="background: #9333EA; border: 1px solid #9333EA ">Pilih Trial</button>
          <div class="input-group mt-2">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">50 Job posting</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Iklan aktif 30 hari</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Posting di instagram & fb</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 20px; font-weight: 400; margin-top: 1px;">Iklan tayang di seluruh channel
              kami. <br> (Website, Linkedln, <br>
              Facebook, Instagram, Telegram <br>
              dan Twitter)</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Notifikasi lamaran masuk</p>
          </div>
          <div class="input-group ">
            <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
            <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Free design poster loker</p>
          </div>
            <div class="input-group ">
              <i class="fa-regular fa-circle-check fa-md mt-1" style="color: #000000; margin-top: 7px;"></i>
              <p class="ms-2 fw-normal" style="font-size: 16px; line-height: 1px; font-weight: 400; margin-top: 9px;">Unlimited job applications</p>
            </div>
        </div>
      </div>

  
    </div>
    
  
  
</div>

    
@endsection