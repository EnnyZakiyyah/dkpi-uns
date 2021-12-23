@extends('dashboard/layouts/main')

@section('title', 'Dashboard')

@section('container')
<div class="row">
    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
      <div class="icon-box">
        <div class="icon"><i class="bx bx-file"></i></div>
        <h4><a href="">Penyusunan Legal Drafting</a></h4>
        {{-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> --}}
        <a href="/layanan/legaldrafting" class="btn-learn-more">Baca Selengkapnya</a>
      </div>
    </div>
</div>
@endsection
