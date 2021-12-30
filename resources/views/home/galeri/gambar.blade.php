@extends('layouts.main')
@section('container')
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">
    <section id="layanan" class="portfolio"  style="background-color: #f3f5fa">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Galeri</h2>
              <p>Berisi Video/Gambar terkait hubungan kerjasama.</p>
              {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>
      
            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <a class="filter-active" href="/home/galeri/gambar">Gambar</a>
              <a href="/home/galeri/video">Video</a>
              </ul>
              <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($galleries as $galeri)
              <!-- CV/PT -->
              <div class="col-lg-6 col-md-6 portfolio-item filter-mou">
                {{-- <div class="portfolio-img"><iframe {{ $galeri->gambar }} src="{{ $galeri->gambar }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div> --}}
                <div class="portfolio-img"><img src="{{ $galeri->gambar }}" class="img-fluid" alt="" {{ $galeri->gambar }}></div>
                <div class="portfolio-info">
                  <h4>{{ $galeri->judul }}</h4>
                  <p>{!! $galeri->caption !!}</p>
                  <a href="{{ $galeri->gambar }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $galeri->judul }}"><i class="bx bx-plus"></i></a>
                  <a href="/home/galeridetails/{{ $galeri->id }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
              @endforeach


  </div>
</section><!-- End Skills Section -->



@endsection
