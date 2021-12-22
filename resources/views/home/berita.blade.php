@extends('layouts.main')
@section('container')
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">
        <section id="berita" class="berita section-bg">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Berita</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>
              <div class="row">
                {{-- @if($beritas->count()) --}}
               
                  <div class="carousel-inner">
                   
                    <div class="carousel-item active">
                      
                      <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($beritas->skip(0) as $berita )
                        <div class="col">
                          <div class="card h-100">
                            <img src="{{asset('storage/'. $berita->gambar )}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{ $berita->judul }}</h5>
                              <p class="card-text">{{ $berita->excerpt }}
                               <left> <a href="/home/berita/beritadetails/{{ $berita->id }}" class="btn-learn-more">Baca Selengkapnya...</a></left>
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
                  <!-- Pagination -->
                 <p><br/>
                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <li class="page-item">
                        {{ $beritas->links() }}
                      </li>
                    </ul>
                  </nav>
                </div></p>
         
                {{-- @else
                <p class="text-center fs-4">No post found.</p>
                @endif --}}
                         
             
            </div>


           
            </div>
          </section><!-- End Team Section -->
    </div>


@endsection
