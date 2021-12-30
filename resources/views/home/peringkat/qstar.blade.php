@extends('layouts.main')
@section('container')
<!-- ======= Hero Section ======= -->
<div class="box">
      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio"  style="background-color: #fff">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Peringkat UNS</h2>
            <p>dari tahun ke tahun, UNS terus meningkatkan mutu dan layanan </p>
          </div>

                  {{-- <label for="tahun" class="form-label">Tampilkan Data Tahun</label>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                      <button class="btn btn-outline-primary" type="button" id="button-addon2">Search</button>
                    </div> --}}
  <div class="container">
    <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
      <a href="/home/thes">THES</a>
      <a class="filter-active" href="/home/qstar">QStar</a>

    </ul> </div>

          {{-- <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200"> --}}
          <!-- CV/PT -->
             
                    <!-- ======= Portfolio Details Section ======= -->
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
            <div class="portfolio-info">
              <h3>Information</h3>
              @foreach ($qss as $qs)
              <h2>{{ $qs->judul }}</h2>
              <ul>
                <li><strong>Kategori</strong>&nbsp;:&nbsp;{{ $qs->jenis }}</li>
                <li><strong>Peringkat</strong>&nbsp;:&nbsp; {{ $qs->peringkat }}</li>
                <li><strong>Update</strong>&nbsp;:&nbsp; {{ $qs->updated_at }}</li>
                <li><strong>Sumber</strong>&nbsp;:&nbsp; <a href="{{ $qs->link }}">{{ $qs->link }}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>{{ $qs->judul }}</h2>
              <p>{!! $qs->berita !!}</p>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->
                {{-- </div>
        </div> --}}
                {{-- <div class="card">
                  <img src="{{asset('assets/img/THES.jpeg')}}" class="card-img-top" alt="..." width="50%" height="100px">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="portfolio-description">
                          @foreach ($thess as $thes)


                        <h2>{{ $thes->judul }}</h2>

                            <strong>Kategori</strong>&nbsp;:&nbsp;{{ $thes->jenis }}<br/>
                            <strong>Peringkat</strong>&nbsp;:&nbsp; {{ $thes->peringkat }}<br/>
                            <strong>Update</strong>&nbsp;:&nbsp; {{ $thes->updated_at }}<br/>
                            <strong>Sumber</strong>&nbsp;: <a href="{{ $thes->link }}">{{ $thes->link }}</a><br/>
                            <p>
                                {!! $thes->berita !!}
                              </p>
                            @endforeach
                      </div>
                    </p>
                  </div>
                </div>
              </div>
          </div> --}}


              {{-- <div class="portfolio-item filter-qs">
                <div class="portfolio-item filter-qs">
                  <div class="card">
                    <img src="{{asset('assets/img/Qstar.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">
                        <div class="portfolio-description">
                            @foreach ($qss as $qs)
                            <h2>{{ $qs->judul }}</h2>
                                <strong>Kategori</strong>&nbsp;:&nbsp;{{ $qs->jenis }}<br/>
                                <strong>Peringkat</strong>&nbsp;:&nbsp; {{ $qs->peringkat }}<br/>
                                <strong>Update</strong>&nbsp;:&nbsp; {{ $qs->updated_at }}<br/>
                                 <strong>Sumber</strong>&nbsp;:&nbsp; <a href="{{ $qs->link }}">{{ $qs->link }}</a><br/><br/>
                                <p>
                                    {!! $qs->berita !!}
                                  </p>
                                  @endforeach
                        </div>
                      </p>
                    </div>
                  </div>
                  </div> --}}


              {{-- </div> --}}


        </div>
      </section><!-- End Portfolio Section -->

    </div>

@endsection
