@extends('layouts.main')
@section('container')

    <!-- ======= Galeri Video Section ======= -->
    <section id="layanan" class="portfolio"  style="background-color: #f3f5fa">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Galeri</h2>
              <p>Berisi Video/Gambar terkait hubungan kerjasama.</p>
            </div>
      
            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <a href="/home/galeri/gambar">Gambar</a>
              <a class="filter-active" href="/home/galeri/video">Video</a>
              </ul>
              <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                
                @foreach ($galleries as $galeri)
              <div class="col-lg-6 col-md-6 portfolio-item filter-mou">
                <div class="portfolio-img"><iframe width="620" height="350" src="{{ $galeri->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="portfolio-info">
                  <h4>{{ $galeri->judul }}</h4>
                  <p>{!! $galeri->caption !!}</p>
                  <a href="{{ $galeri->link }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $galeri->judul }}"><i class="bx bx-plus"></i></a>
                  <a href="/home/galeridetails/{{ $galeri->id }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
              @endforeach
              </div>

  </div>
</section><!-- End Skills Section -->



@endsection
