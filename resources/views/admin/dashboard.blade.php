@extends('layout.admin')
@section('judul', 'Dashboard')

@section('breadcrumb', 'Dashboard')
    
@section('content')


<div class="container">
  <div class="row justify-content-center">
    @foreach ($pekerjaans  as $pekerjaan)
    <div class="col-md-5 mt-5 d-flex p-3 m-3 border border-secondary rounded ">
      <img src="{{ asset('image/' . $pekerjaan->image) }}" alt="" style="width: 100px; height: 100px;">
      <p class="" style="margin-left: 30px;">Data Dari</p>
    </div>
    @endforeach
  </div>
</div>

@endsection