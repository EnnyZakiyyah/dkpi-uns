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
                <li data-filter=".filter-mou">MoU</li>
              </ul>

              @foreach ($galleries as $galeri)


              <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
              <!-- CV/PT -->
              <div class="col-lg-6 col-md-6 portfolio-item filter-mou">
                <div class="portfolio-img"><iframe width="650" height="370" src="{{ $galeri->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="portfolio-info">
                  <h4>{{ $galeri->judul }}</h4>
                  <p>{!! $galeri->caption !!}</p>
                  <a href="{{ $galeri->link }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $galeri->judul }}"><i class="bx bx-plus"></i></a>
                  <a href="/galeri/{{ $galeri->id }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
              @endforeach


  </div>
</section><!-- End Skills Section -->



@endsection
