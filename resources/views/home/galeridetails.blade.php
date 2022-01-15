@extends('layouts.main')
@section('container')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs" style="background-color: #fff">
    <div class="container">

        <ol>
            <li><a href="/home/galeri">Galeri</a></li>
            <li>{{ $galeri->judul }}</li>
        </ol>
        <h2 class="text-capitalize">Galeri {{ $galeri->judul }} Details</h2>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Galeri Details Section ======= -->
<section id="portfolio-details" class="portfolio-details" style="background-color: #f3f5fa" >
    <div class="container" ata-aos="fade-up">
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper-container">
                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            @if($galeri->jenis == 'video')
                            <center><iframe width="650" height="370" src="{{ $galeri->link }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe></center>
                            @else
                            <div class="portfolio-img"><img src="{{asset('storage/'. $galeri->gambar )}}"
                                    class="img-fluid" alt="" {{asset('storage/'. $galeri->gambar )}} width="620"
                                    height="350"></div>

                            @endif
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info" style="background-color: rgb(248, 248, 248)">
                    <h3>Information</h3>
                    <ul>
                        <li><strong>Date</strong>: {{ $galeri->created_at }}</li>
                        <li><strong>Link</strong>: <a
                                href="https://youtu.be/YHyO-N8OkSQ">https://youtu.be/YHyO-N8OkSQ</a></li>
                    </ul>
                </div>
            </div>
                <div class="portfolio-description">
                    <h2 class="text-capitalize">{{ $galeri->judul }}</h2>
                    {!! $galeri->caption !!}
                </div>
            </div>
    </div>
</section><!-- End Section -->
@endsection
