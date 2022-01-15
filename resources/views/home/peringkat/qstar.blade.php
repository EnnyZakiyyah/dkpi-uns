@extends('layouts.main')
@section('container')

<!-- ======= QStar Section ======= -->
<br>
<section id="portfolio" class="portfolio"  style="background-color: #f3f5fa" >
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Peringkat UNS</h2>
            <p>dari tahun ke tahun, UNS terus meningkatkan mutu dan layanan </p>
        </div>
        <div class="container">
            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <a href="/home/thes">THES</a>
                <a class="filter-active" href="/home/qstar">QStar</a>

            </ul>
        </div>

        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper-container">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="{{asset('assets/img/Qstar.jpeg')}}" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{asset('assets/img/Qstar.jpeg')}}" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{asset('assets/img/Qstar.jpeg')}}" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info" style="background-color: rgb(248, 248, 248)">
                            <h3>Information</h3>
                            @foreach ($qss as $qs)
                            <h2 class="text-capitalize">{{ $qs->judul }}</h2>
                            <ul>
                                <li><strong>Kategori</strong>&nbsp;:&nbsp;{{ $qs->jenis }}</li>
                                <li><strong>Peringkat</strong>&nbsp;:&nbsp; {{ $qs->peringkat }}</li>
                                <li><strong>Update</strong>&nbsp;:&nbsp; {{ $qs->updated_at }}</li>
                                <li><strong>Sumber</strong>&nbsp;:&nbsp; <a href="{{ $qs->link }}">{{ $qs->link }}</a>
                                </li>
                            </ul>
                        </div>
                      </div>
                        <div class="portfolio-description">
                            <h2 class="text-capitalize">{{ $qs->judul }}</h2>
                            <p>{!! $qs->berita !!}</p>
                            @endforeach
                    </div>
                </div>
            </div>
        </section><!-- End Details Section -->
    </div>
</section><!-- End Section -->
@endsection
