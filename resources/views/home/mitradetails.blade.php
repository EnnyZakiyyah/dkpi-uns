@extends('layouts.main')
@section('container')
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">
        <section id="layanan" class="portfolio">
            <div class="container" data-aos="fade-up">

                <main id="main">
                {{-- @if($beritas->count()) --}}

                    <!-- ======= Breadcrumbs ======= -->
                    <section id="breadcrumbs" class="breadcrumbs">
                      <div class="container">

                        <ol>
                          <li><a href="/home/mitra">Mitra</a></li>
                          <li>Mitra Details</li>
                        </ol>
                        <h2>{{ $mitra->instansi }}</h2>
                        <h2>{{ $mitra->nama_instansi }}</h2>

                      </div>
                    </section><!-- End Breadcrumbs -->

                    <!-- ======= Portfolio Details Section ======= -->
                    <section id="portfolio-details" class="portfolio-details">
                      <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Nama instansi: {{ $mitra->nama_instansi}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted"> jenis Instansi: {{ $mitra->instansi}}</h6>
                                <p class="card-text">Nomor MoU UNS: {{ $mitra->no_mou_uns }}</p>
                                <p class="card-text">Nomor MoU Mitra: {{ $mitra->no_mou_mitra }}</p>
                                <p class="card-text">Ruang Lingkup: {{ $mitra->ruang_lingkup }}</p>
                                <p class="card-text">Awal Masa Berlaku: {{ $mitra->jangka_waktu_awal }}</p>
                                <p class="card-text">Akhir Masa Berlaku: {{ $mitra->jangka_waktu_akhir }}</p>
                                <p class="card-text">Pejabat Penandatangan: {{ $mitra->pejabat_penandatangan }}</p>
                                @if(Auth::check())
                                <a href="{{ $mitra->id }}/edit" class="btn btn-primary">Edit</a>
                                <form action="{{ $mitra->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
                                </form>
                                @endif
                                <a href="/home/mitra" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
            </div>
      </div>

@endsection
