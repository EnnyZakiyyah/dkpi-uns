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

              <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
              <!-- CV/PT -->
              <div class="col-lg-6 col-md-6 portfolio-item filter-mou">
                <div class="portfolio-img"><iframe width="650" height="370" src="https://www.youtube.com/embed/YHyO-N8OkSQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="portfolio-info">
                  <h4>Penandatanganan MoU Universitas Sebelas Maret</h4>
                  <p>Bank Syariah Indonesia</p>
                  <a href="https://www.youtube.com/embed/YHyO-N8OkSQ" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Penandatanganan MoU Universitas Sebelas Maret"><i class="bx bx-plus"></i></a>
                  <a href="/galeri/more-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 portfolio-item filter-mou">
                <div class="portfolio-img"><iframe width="650" height="370" src="https://www.youtube.com/embed/QvqNUeE7A74" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="portfolio-info">
                  <h4>Penandatanganan MoU Universitas Sebelas Maret</h4>
                  <p>University of Panama</p>
                  <a href="https://www.youtube.com/embed/QvqNUeE7A74" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Penandatanganan MoU Universitas Sebelas Maret"><i class="bx bx-plus"></i></a>
                  <a href="/galeri/more-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>


  </div>
</section><!-- End Skills Section -->



@endsection
