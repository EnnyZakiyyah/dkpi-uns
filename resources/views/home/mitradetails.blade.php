@extends('layouts.main')
@section('container')

<!-- ======= Detail Mitra Section ======= -->
<section id="mitra" class="portfolio">
    <div class="container" data-aos="fade-up">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="/home/mitra">Mitra</a></li>
                    <li>Mitra Details</li>
                </ol>
                <h2 class="text-uppercase">{{ $mitra->instansi }} - {{ $mitra->nama_instansi }}</h2>
                <h3 class="badge bg-info">{{ $mitra->status }}</h3>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">Nama Instansi : {{ $mitra->nama_instansi}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted"> Jenis Instansi : <bold class="text-uppercase">
                                {{ $mitra->instansi}}</bold>
                        </h6>
                        <p class="card-text">Nomor MoU UNS : {{ $mitra->no_mou_uns }}</p>
                        <p class="card-text">Nomor MoU Mitra : {{ $mitra->no_mou_mitra }}</p>
                        <p class="card-text">Ruang Lingkup : {{ $mitra->ruang_lingkup }}</p>
                        <p class="card-text">Awal Masa Berlaku : {{ $mitra->jangka_waktu_awal }}</p>
                        <p class="card-text">Akhir Masa Berlaku : {{ $mitra->jangka_waktu_akhir }}</p>
                        <p class="card-text">Pejabat Penandatangan : {{ $mitra->pejabat_penandatangan }}</p>
                        <br />
                        <p>Download File</p>
                        <form action="token/{{ $mitra->id }}" method="POST" class="row g-3">
                            @csrf
                            <div class="col-md-3">
                                <input type="text" name='token' class="form-control"
                                    placeholder=" Input kode cth: 123456">
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary">submit</button>
                            </div>
                            <div class="col-md-4">
                                <a href="/home/mitra-cv" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                        <form class="row mt-5">
                            @if(Auth::check())
                            <div class="col-md-1">
                                <a href="/mitra/{{ $mitra->id }}/edit" class="btn btn-primary">Edit</a>
                            </div>
                            <div class="col-md-1 mt-2">
                                <form action="mitra/{{ $mitra->id }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <div class="col-md-4">
                                    <input type="text" name='token' class="form-control" placeholder="Input kode cth: 123456">
                                    </div>
                                    <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary">submit</button>
                                    </div>
                                    <div class="col-md-2">
                                      <a href="/home/mitra-cv" class="btn btn-secondary">Kembali</a>
                                    </div>
                                </form>
                                  @if(Auth::check())
                                  <div class="col-md-2">
                                    <a href="/mitra/{{ $mitra->id }}/edit" class="btn btn-primary">Edit</a>
                                  </div>
                                  <div class="col-md-2">
                                    <form action="mitra/{{ $mitra->id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
                                    </form>
                                  @endif
                                  </div>


                            </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section><!-- ======= End Detail Mitra Section ======= -->
@endsection
