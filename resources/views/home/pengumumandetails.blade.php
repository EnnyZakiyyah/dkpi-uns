@extends('layouts.main')
@section('container')

<!-- ======= Pengumuman Section ======= -->
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Pengumuman</h2>
            <p>Informasi terkait Direktorat Kerjasama, pengembangan, dan Internasionalisasi dapat dilihat pada kolom
                berikut </p>
        </div>
        <div class="card">
            <h5 class="card-header">INFORMASI !!! </h5>
            <div class="card-body">
                <h5 class="card-title">{{ $pengumuman->judul }}</h5>
                <p class="card-text">{{ $pengumuman->pengumuman }}</p>

                @if($pengumuman->link != '')
                <a
                    href="{{ $pengumuman->link }}">{{ $pengumuman->link }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                @endif
                <br>
                <br>
                @if($pengumuman->file_download != '')
                <a href="/download-pengumuman/{{ $pengumuman->id }}" class="btn btn-primary">Download</a>
                @endif
                <a href="/home/pengumuman" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</section><!-- End Team Section -->
@endsection
