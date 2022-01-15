@extends('layouts.main')
@section('container')
@foreach ($berita as $berita)

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs" style="background-color: #fff">
    <div class="container">

        <ol>
            <li><a href="/home/berita">Berita</a></li>
            <li>Berita Details</li>
        </ol>
        <h2 class="text-capitalize">Berita {{ $berita->judul }} Details</h2>

    </div>
</section><!-- End Breadcrumbs -->

<section id="portfolio-details" class="portfolio-details" style="background-color: #f3f5fa">
    <div class="container" data-aos="fade-up">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="portfolio-details-slider swiper-container">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="{{asset('storage/'. $berita->gambar )}}" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="portfolio-description">
                <h2 class="text-capitalize">{{ $berita->judul }}</h2>
                <strong>Di Update</strong>&nbsp;: {{ $berita->created_at }}<br />
                <p>
                    {!! $berita->body !!}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</section><!-- End Section -->

@endsection
