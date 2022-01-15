@extends('layouts.main')
@section('container')

<!-- ======= Galeri Gambar Section ======= -->
<br>
<section id="layanan" class="portfolio" style="background-color: #f3f5fa">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Galeri</h2>
            <p>Berisi Video/Gambar terkait hubungan kerjasama.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <a class="filter-active" href="/home/galeri/gambar">Gambar</a>
            <a href="/home/galeri/video">Video</a>
        </ul>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            @foreach ($galleries as $galeri)
        <div class="col-lg-6 col-md-6 portfolio-item filter-mou">
            <div class="portfolio-img"><img src="{{asset('storage/'. $galeri->gambar )}}" class="img-fluid" alt=""
                    {{asset('storage/'. $galeri->gambar )}} width="620" height="350"></div>
            <div class="portfolio-info">
                <h4>{{ $galeri->judul }}</h4>
                <p>{!! $galeri->caption !!}</p>
                <a href="{{asset('storage/'. $galeri->gambar )}}" data-gallery="portfolioGallery"
                    class="portfolio-lightbox preview-link" title="{{ $galeri->judul }}"><i class="bx bx-plus"></i></a>
                <a href="/home/galeridetails/{{ $galeri->id }}" class="details-link" title="More Details"><i
                        class="bx bx-link"></i></a>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</section><!-- End Section -->

@endsection
