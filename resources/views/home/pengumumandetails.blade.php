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
                            {{-- @foreach ($pengumuman as $pengumuman) --}}
                            <div class="card-body">
                              <h5 class="card-title">{{ $pengumuman->judul }}</h5>
                              <p class="card-text">{{ $pengumuman->pengumuman }}</p>
                              {{-- <a href="/home/pengumumandetails/{{ $pengumuman->id }}">Selengkapnya</a> --}}
                             
                                @if($pengumuman->link != 'null')
                                <a href="{{ $pengumuman->link }}">{{ $pengumuman->link }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 
                                @endif
                                @if($pengumuman->file_download != '')
                                <a href="/download-pengumuman/{{ $pengumuman->id }}" class="btn btn-warning">Download surat UNS</a>
                                @endif
                                  <a href="/home/pengumuman" class="btn btn-secondary">Kembali</a>
                                  
                            </div>
                            <!-- garis -->
              {{-- <hr />
                            @endforeach --}}
                          </div>


        </div>
      </section><!-- End Team Section -->


    </div>

@endsection