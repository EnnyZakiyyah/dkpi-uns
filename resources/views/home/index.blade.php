@extends('layouts.main')
@section('container')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">

      {{-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <img src="{{asset('assets/img/slider-01.jpeg')}}" class="card-img-top" alt="...">

          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/slider-02.jpeg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/slider-03.jpeg')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> --}}

        <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Direktorat Kerjasama, Pengembangan dan Internasionalisasi</h1>
          <h2>Universitas Sebelas Maret</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          {{-- <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt=""> --}}
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            {{-- <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
            </div> --}}
            <div class="carousel-inner">
              {{-- <div class="shadow p-3 mb-5 bg-blue rounded"> --}}
              <div class="carousel-item active">

                <img src="{{asset('assets/img/slider-01.jpeg')}}" class="d-block w-100" alt="..."></div>

              <div class="carousel-item">
                <img src="{{asset('assets/img/slider-02.jpeg')}}" class="d-block w-100" alt="..."></div>

              <div class="carousel-item">
               <img src="{{asset('assets/img/slider-03.jpeg')}}" class="d-block w-100" alt="..."></div>
              <div class="carousel-item">
               <img src="{{asset('assets/img/slider-04.jpeg')}}" class="d-block w-100" alt="..."></div>
              <div class="carousel-item">
               <img src="{{asset('assets/img/slider-05.jpeg')}}" class="d-block w-100" alt="..."></div>
              {{-- </div> --}}
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
      </div>

    </div>
  </div>
    </section><!-- End Cliens Section -->
    <section id="berita" class="skills">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <a href="/home/berita"><h2>Berita</h2></a>
            {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
          {{-- <p>Pengumuman Direktorat Kerjasama, Internasionalisasi </p> --}}
          </div>
          <div class="row">

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>

              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row row-cols-1 row-cols-md-3 g-4">

                    <div class="col">
                      <div class="card h-100">
                        <img src="{{asset('assets/img/slide1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">1</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                           <left> <a href="/berita/beritadetails" class="btn-learn-more">Baca Selengkapnya</a></left>
                          </p>

                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card h-100">
                        <img src="{{asset('assets/img/cta-bg.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">2</h5>
                          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                          <a href="/berita/berita-details" class="btn-learn-more ml-3">Baca Selengkapnya</a>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="{{asset('assets/img/banner-siswa.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100">
                        <img src="{{asset('assets/img/slide1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">3</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="{{asset('assets/img/cta-bg.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">4</h5>
                          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="{{asset('assets/img/banner-siswa.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">5</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          <a href="/layanan/legaldrafting" class="btn-learn-more">Baca Selengkapnya</a>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100">
                        <img src="{{asset('assets/img/slide1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">6</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="{{asset('assets/img/cta-bg.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">7</h5>
                          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="{{asset('assets/img/banner-siswa.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </div>
        </div>
      </section>

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
    <div class="container" data-aos="fade-up">

<div class="section-title">
  <h2>About Us</h2>
</div>

<div class="row content">
      <h5>Tugas dan Fungsi</h5> <br/>
    <ul>
      <p>Direktorat dan Kerjasama, Pengembangan dan Internasionalisasi mempunyai tugas melaksanakan urusan hukum dan pengembangan kegiatan kerja sama</p>
      <li><i class="ri-check-double-line"></i> Pelaksanaan penyusunan peraturan perundang-undangan dan layanan hukum</li>
      <li><i class="ri-check-double-line"></i> Pelaksanaan koordinasi pelaksanaan program kerja sama dalam negeri</li>
      <li><i class="ri-check-double-line"></i> Pelaksanaan kegiatan kerja sama dalam negeri</li>
      <li><i class="ri-check-double-line"></i> Pelaksanaan administrasi kerja sama dalam dan luar negeri</li>
      <li><i class="ri-check-double-line"></i> Pelaksanaan evaluasi dan pelaporan kegiatan kerja sama</li>
    </ul>
</div>
<br/>
</div>

    <!-- ======= Services Section ======= -->
    <section id="data-pdln" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Data PDLN</h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        <p>Perjalanan Dinas Luar Negeri (PDLN) adalah adalah penugasan yang dilakukan oleh mahasiswa, dosen, maupun pimpinan dalam rangka tugas belajar dan tugas dinas lainnya di luar negeri yang disetujui oleh Rektor UNS</p>
        </div>

        <div class="row">
          <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-people-fill"></i></div>
              <h4><a href="/home/pdln">Mahasiswa</a></h4>
              <p>Data mahasiswa yang melakukan perjalanan dinas ke luar negeri dalam rangka tugas belajar maupun tugas lainnya dapat dilihat disini</p>
              <a href="/home/pdln" class="btn-learn-more">Baca Selengkapnya</a>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="/home/pdln">Dosen</a></h4>
              <p>Data Dosen yang melakukan perjalanan dinas ke luar negeri dalam rangka tugas belajar, penelitian, maupun tugas lainnya dapat dilihat disini</p>
              <a href="/home/pdln" class="btn-learn-more">Baca Selengkapnya</a>
            </div>
          </div>

          <div  class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-user"></i></div>
              <h4><a href="/home/pdln">Pimpinan</a></h4>
              <p>Data pejabat UNS yang melakukan perjalanan dinas ke luar negeri dalam rangka diplomasi maupun tugas lainnya dapat dilihat disini</p>
              <a href="/home/pdln" class="btn-learn-more">Baca Selengkapnya</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- End Team Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pengumuman</h2>
            <p>Informasi terkait Direktorat Kerjasama, pengembangan, dan Internasionalisasi dapat dilihat pada kolom berikut </p>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <div class="card">
            <div class="card-header" style="background-color: rgb(214, 0, 0)" >
              <bold style="color: white">INFORMASI !!!</bold>
            </div>
            @foreach ($pengumumans as $pengumuman)


            <div class="card-body">
              <h5 class="card-title">{{ $pengumuman->judul }}</h5>
              <p class="card-text">{{ $pengumuman->pengumuman }}</p>

            </div>
            @endforeach
          </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Informasi Section ======= -->



    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <a href="/home/faq"><h2>Frequently Asked Questions</h2></a>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <div class="faq-list">
          <ul>

              @foreach ($faqs as $faq)


            <li data-aos="fade-up" data-aos-delay="{{ $i = $loop->iteration }}00">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-{{ $i }}">{{ $faq->pertanyaan }}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-{{ $i }}" class="collapse show" data-bs-parent=".faq-list">
                <p>{{ $faq->jawaban }}</p>
              </div>
            </li>
            @endforeach

          </ul>
        </div>

      </div>
      </section><!-- End Frequently Asked Questions Section -->

          <!-- ======= Contact Section ======= -->
          @include('contact.contact')
    <!-- End Contact Section -->


@endsection
