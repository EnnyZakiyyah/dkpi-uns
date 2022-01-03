@extends('layouts.main')
@section('container')
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">

        <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Pengumuman</h2>
            <p>Informasi terkait Direktorat Kerjasama, pengembangan, dan Internasionalisasi dapat dilihat pada kolom berikut </p>

            {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
          </div>





                        <div class="card">
                            <h5 class="card-header">INFORMASI !!! </h5>
                            @foreach ($pengumumans as $pengumuman)
                            <div class="card-body">
                              <h5 class="card-title">{{ $pengumuman->judul }}</h5>
                              <p class="card-text">{{ $pengumuman->excerpt }}</p>
                              <a href="{{ $pengumuman->link }}">Selengkapnya</a>
                              {{-- <a href="{{ $pengumuman->link }}">Selengkapnya</a> --}}
                            </div>
                            <!-- garis -->
              <hr />
                            @endforeach
                          </div>



        </div>
      </section><!-- End Team Section -->


    </div>

@endsection
