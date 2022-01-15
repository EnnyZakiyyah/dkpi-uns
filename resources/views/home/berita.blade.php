@extends('layouts.main')
@section('container')

<br>
<section id="berita" class="berita section-bg">
  <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>Berita</h2>
          <p>Berisi informasi berupa berita terkait hubungan kerjasama.</p>
      </div>
      <div class="row">
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="row row-cols-1 row-cols-md-3 g-4">
                      @foreach ($beritas->skip(0) as $berita )
                      <div class="col">
                          <div class="card h-100">
                              <img src="{{asset('storage/'. $berita->gambar )}}" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <h5 class="card-title">{{ $berita->judul }}</h5>
                                  <p class="card-text">{!!$berita->excerpt!!}
                                      <left> <a href="/home/berita/beritadetails/{{ $berita->id }}"
                                              class="btn-learn-more">Baca Selengkapnya...</a></left>
                                  </p>
                              </div>
                              <div class="card-footer">
                                  <small class="text-muted">{{ $berita->created_at->diffForHumans() }}</small>
                              </div>
                          </div>
                      </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
  </div>
</section><!-- End Team Section -->


@endsection
