@extends('layouts.main')
@section('container')

<!-- ======= PDLN Details Section ======= -->
<section id="pdln" class="portfolio">
    <div class="container" data-aos="fade-up">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="/home/pdln-mahasiswa">PDLN</a></li>
                    <li>PDLN Details</li>
                </ol>
                <h5 class="text-uppercase">{{ $pdln->jenis }} - {{ $pdln->nama }}</h5>
                <h3 class="badge bg-info">{{ $pdln->status }}</h3>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">Nama : {{ $pdln->nama}}</h5>
                        <h6 class="card-subtitle mb-3 text-muted">Kategori : <bold class="text-uppercase"> {{ $pdln->jenis}}</bold></h6>
                        <p class="card-text">Jumlah Orang : {{ $pdln->jumlah_orang }}</p>
                        <p class="card-text">Unit Kerja : {{ $pdln->unit_kerja }}</p>
                        <p class="card-text">Tujuan : {{ $pdln-> tujuan }}</p>
                        <p class="card-text">Negara : {{ $pdln->negara }}</p>
                        <p class="card-text">Awal : {{ date('d F, Y',strtotime($pdln->jangka_waktu_awal))}}</p>
                        <p class="card-text">Akhir : {{ $pdln->jangka_waktu_akhir }}</p>
                        <p class="card-text">Nomor Surat UNS : {{ $pdln->surat_uns }}</p>
                        <p class="card-text">Catatan UNS : {{ $pdln->catatan_uns }}</p>
                        <p class="card-text">Nomor Surat Belmawa : {{ $pdln->belmawa }}</p>
                        <p class="card-text">Catatan Belmawa : {{ $pdln->catatan_belmawa }}</p>
                        <p class="card-text">Nomor Ktln : {{ $pdln->ktln_kemensetneg }}</p>
                        <p class="card-text">Catatan Ktln : {{ $pdln->catatan_setneg }}</p>
                        <br />
                        @if($code == $pdln->token)
                        @if($pdln->file_surat_uns != 'null')
                        <a href="/home/download/uns/{{ $pdln->id }}" class="btn btn-info text-white">Download Surat UNS</a>
                        @endif
                        @if($pdln->file_belmawa != 'null')
                        <a href="/home/download/belmawa/{{ $pdln->id }}" class="btn btn-info text-white" >Download Surat Belmawa</a>
                        @endif
                        @if($pdln->file_ktln != 'null')
                        <a href="/home/download/ktln/{{ $pdln->id }}" class="btn btn-info text-white">Download surat ktln</a>
                        @endif
                        @else
                        <p>Download File</p>
                        <form action="token/{{ $pdln->id }}" method="POST" class="row g-3">
                            @csrf
                            <div class="col-md-3">
                                <input type="text" name='token' class="form-control" placeholder=" Input kode cth: 123456">
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary">submit</button>
                            </div>
                            @endif
                        </form>
                        <form class="row mt-5">
                            <div class="col-md-2">
                                <a href="/home/pdln-mahasiswa" class="btn btn-secondary">Kembali</a>
                            </div>
                            @if(Auth::check())
                            <div class="col-md-1 mt-2">
                                <a href="/pdln/{{ $pdln->id }}/edit" class="btn btn-primary">Edit</a>
                            </div>
                            <div class="col-md-1 mt-2">
                                <form action="{{ $pdln->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('apakah anda yakin?')">Delete</button>
                                </form>
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section><!-- ======= End Details PDLN Section ======= -->
@endsection
