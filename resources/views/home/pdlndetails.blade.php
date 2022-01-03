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
                          <li><a href="/home/pdln-mahasiswa">PDLN</a></li>
                          <li>PDLN Details</li>

                        </ol>
                        <h3 class="badge bg-info">{{ $pdln->status }}</h3>
                        <h2>{{ $pdln->instansi }}</h2>
                        <h2>{{ $pdln->nama_instansi }}</h2>

                      </div>
                    </section><!-- End Breadcrumbs -->

                    <!-- ======= Portfolio Details Section ======= -->
                    <section id="portfolio-details" class="portfolio-details">
                      <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Nama : {{ $pdln->nama}}</h5>
                            <h6 class="card-subtitle mb-3 text-muted">Kategori : {{ $pdln->jenis}}</h6>
                            <p class="card-text">Jumlah Orang : {{ $pdln->jumlah_orang }}</p>
                            <p class="card-text">Unit Kerja : {{ $pdln->unit_kerja }}</p>
                            <p class="card-text">Tujuan : {{ $pdln->tujuan }}</p>
                            <p class="card-text">Negara : {{ $pdln->negara }}</p>
                            <p class="card-text">Awal : {{ date('d F, Y',strtotime($pdln->jangka_waktu_awal))}}</p>
                            <p class="card-text">Akhir : {{ $pdln->jangka_waktu_akhir }}</p>
                            <p class="card-text">Nomor Surat UNS :{{ $pdln->surat_uns }}</p>
                            <p class="card-text">Catatan UNS : {{ $pdln->catatan_uns }}</p>
                            <p class="card-text">Nomor Surat Belmawa : {{ $pdln->belmawa }}</p>
                            <p class="card-text">Catatan Belmawa : {{ $pdln->catatan_belmawa }}</p>
                            <p class="card-text">Nomor Ktln : {{ $pdln->ktln_kemensetneg }}</p>
                            <p class="card-text">Catatan Ktln : {{ $pdln->catatan_setneg }}</p>
                            <br/>
                                <p>Download File</p>
                                <form action="token/{{ $pdln->id }}" method="POST" class="row g-3">
                                    @csrf
                                    <div class="col-md-4">
                                      <input type="text" name='token' class="form-control"  placeholder="Input kode cth: 123456">
                                    </div>
                                    <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">submit</button>
                                    </div>
                                    <div class="col-md-4">
                                      <a href="/home/pdln-mahasiswa" class="btn btn-secondary">Kembali</a>
                                    </div>
                                </form>
                                @if(Auth::check())
                                <a href="{{ $pdln->id }}/edit" class="btn btn-primary">Edit</a>
                                <form action="{{ $pdln->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
                                </form>
                                @endif
                                
                            </div>
                        </div>
            </div>
      </div>

@endsection
