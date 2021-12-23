@extends('layouts.main')
@section('container')
<!-- ======= Hero Section ======= -->
<div class="box">
      <!-- ======= Portfolio Section ======= -->
      <section id="pdln" class="portfolio"  style="background-color: #f3f5fa">
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
                      <li data-filter=".filter-thes">THES</li>
                      <li data-filter=".filter-qs">QS Star</li>

    </ul> </div>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <!-- CV/PT -->
              <div class="portfolio-item filter-thes">
                <div class="card">
                  <img src="{{asset('assets/img/cta-bg.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="portfolio-description">
                          @foreach ($thess as $thes)


                        <h2>{{ $thes->judul }}</h2>

                            <strong>Kategori</strong>&nbsp;:{{ $thes->jenis }}<br/>
                            <strong>Peringkat</strong>&nbsp;: {{ $thes->peringkat }}<br/>
                            <strong>dimuat</strong>&nbsp;: {{ $thes->created_at }}<br/>
                            {{-- <strong>Project URL</strong>&nbsp;: <a href="{{ $thes->link }}">selengkapnya</a><br/> --}}
                            <p>
                                {!! $thes->berita !!}
                              </p>
                            @endforeach
                      </div>
                    </p>
                  </div>
                </div>
              </div>
          </div>


              <div class="portfolio-item filter-qs">

                <div class="portfolio-item filter-qs">
                  <div class="card">
                    <img src="{{asset('assets/img/cta-bg.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">
                        <div class="portfolio-description">
                            @foreach ($qss as $qs)


                            <h2>{{ $qs->judul }}</h2>

                                <strong>Kategori</strong>&nbsp;:{{ $qs->jenis }}<br/>
                                <strong>Peringkat</strong>&nbsp;: {{ $qs->peringkat }}<br/>
                                <strong>Dimuat</strong>&nbsp;: {{ $qs->created_at }}<br/>
                                {{-- <strong>Project URL</strong>&nbsp;: <a href="{{ $qs->link }}">selengkapnya</a><br/> --}}
                                <p>
                                    {!! $qs->berita !!}
                                  </p>
                                  @endforeach
                        </div>
                      </p>
                    </div>
                  </div>

                  </div>


              </div>


        </div>
      </section><!-- End Portfolio Section -->


      </div>

@endsection
