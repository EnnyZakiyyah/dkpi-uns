@extends('layouts.main')
@section('container')
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">
    <section id="layanan" class="portfolio">
        <div class="container" data-aos="fade-up">

            <main id="main">
            {{-- @if($beritas->count()) --}}
            @foreach ($berita as $berita)

                <!-- ======= Breadcrumbs ======= -->
                <section id="breadcrumbs" class="breadcrumbs">
                  <div class="container">

                    <ol>
                      <li><a href="/home/berita">Berita</a></li>
                      <li>Berita Details</li>
                    </ol>
                    <h2>{{ $berita->judul }}</h2>

                  </div>
                </section><!-- End Breadcrumbs -->

                <!-- ======= Portfolio Details Section ======= -->
                <section id="portfolio-details" class="portfolio-details">
                  <div class="container">

                    <div class="row gy-4">

                      <div class="col-lg-12">
                        <div class="portfolio-details-slider swiper-container">
                          <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{asset('storage/'. $berita->gambar )}}" alt="">
                            </div>

                            {{-- <div class="swiper-slide">
                                <img src="{{asset('storage/'. $berita->gambar )}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('storage/'. $berita->gambar )}}" alt="">
                            </div> --}}

                          </div>
                          <div class="swiper-pagination"></div>
                        </div>
                      </div>

                    </div>
                    <div class="col-lg-12">
                      <div class="portfolio-description">
                        <h2>{{ $berita->judul }}</h2>

                            {{-- <strong>Category</strong>&nbsp;Penandatanganan<br/>
                            <strong>Client</strong>&nbsp;: BSI<br/> --}}
                            <strong>dirilis</strong>&nbsp;: {{ $berita->created_at }}<br/>
                            {{-- <strong>video</strong>&nbsp;: <a href="https://youtu.be/YHyO-N8OkSQ">https://youtu.be/YHyO-N8OkSQ</a><br/> --}}
                            <p>
                                {!! $berita->body !!}
                            </p>
                      </div>
                    </div>

                  </div>
                </section><!-- End Portfolio Details Section -->
                {{-- @else
                <p class="text-center fs-4">No post found.</p>
                @endif --}}
              </main><!-- End #main -->
            @endforeach
        </div>
  </div>
</section><!-- End Skills Section -->
</div>



@endsection
