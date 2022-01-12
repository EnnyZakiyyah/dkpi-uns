@extends('layouts.main')
@section('container')
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">

      <!-- ======= Portfolio Section ======= -->
      <section id="mitra" class="portfolio"  style="background-color: #f3f5fa">
      <div class="container" data-aos="fade-up">



        <div class="section-title">
          <h2>{{ $judul }}</h2>
            <p>Data Mitra yang menjalin hubungan kerjasama dengan UNS dapat dilihat pada tabel berikut</p>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <a href="/home/mitra-cv" class="filter-active">CV/PT</a>
            <a href="/home/mitra-yayasan">Sekolah/Yayasan</a>
            <a href="/home/mitra-internasional">Internasional</a>
            <a href="/home/mitra-jasaKeuangan">Jasa Keuangan</a>
            <a href="/home/mitra-pemerintah">Pemerintah</a>
        </ul>

        <p>
          <button class="bi bi-search btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Cari Data
          </button>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <form class="row g-3 needs-validation" action="/home/mitra-cv">
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Nama Instansi</label>
                <input type="text" class="form-control" id="validationCustom01" name="nama_instansi" value="{{ request('nama_instansi') }}">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Awal</label>
                <input type="text" class="form-control" id="validationCustom02" name="jangka_waktu_awal" value="{{ request('jangka_waktu_awal') }}">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Akhir</label>
                <input type="text" class="form-control" id="validationCustom03" name="jangka_waktu_akhir" value="{{ request('jangka_waktu_akhir') }}">
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
              <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Pejabat Penandatangan</label>
                <input type="text" class="form-control" id="validationCustom03" name="pejabat_penandatangan" value="{{ request('pejabat_penandatangan') }}">
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-warning" type="submit">Cari Data</button>
              </div>
            </form>
          </div>
        </div>

<br/>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <!-- CV/PT -->
        <div class="portfolio-item filter-yayasan">
            <table class="table table-hover">
              <thead>
                <tr class="text-primary">
                  <th scope="col">No.</th>
                  <th scope="col">Nama Instansi</th>
                  <th scope="col">Ruang Lingkup</th>
                  <th scope="col">Awal</th>
                  <th scope="col">Akhir</th>
                  <th scope="col">Pejabat Penandatangan</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($mitras as $cv)
                <tr>
                  <th scope="row">{{ $mitras->firstItem() + $loop->index }}</th>
                  <td>{{ $cv->nama_instansi }}</td>
                  <td>{{ $cv->ruang_lingkup }}</td>
                  <td>{{ empty(strtotime($cv->jangka_waktu_awal)) ? $cv->jangka_waktu_awal : Carbon\Carbon::parse(date('Y-m-d', strtotime($cv->jangka_waktu_awal)))->isoFormat('D MMMM Y') }}</td>
                  <td>{{ empty(strtotime($cv->jangka_waktu_akhir)) ? $cv->jangka_waktu_akhir : Carbon\Carbon::parse(date('Y-m-d', strtotime($cv->jangka_waktu_akhir)))->isoFormat('D MMMM Y'); }}</td>
                  <td>{{ $cv->pejabat_penandatangan }}</td>
                  @if ($cv->status == 'berlaku' || $cv->status == 'Berlaku')
                  <td style="color: green">{{ $cv->status }}</td>
                  @elseif ($cv->status == 'segera berakhir')
                  <td style="color: yellow">{{ $cv->status }}</td>
                  @else
                  <td style="color: red">{{ $cv->status }}</td>
                  @endif
                  <td>
                    <a href="/home/mitra/{{ $cv->id }}" class="badge bg-info"><span data-feather="eye">lihat</span></a>
                    @if (Auth::check())
                    <a href="/mitra/{{ $cv->id }}/edit" class="badge bg-warning"><span data-feather="eye">edit</span></a>
                    <form action="/mitra/{{ $cv->id }}/delete" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="badge bg-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
                    </form>
                    @endif
                </td>
                </tr>
                @endforeach
              </tbody>
            </table>

            <!-- Pagination -->
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  {{ $mitras->links() }}
                </li>
              </ul>
            </nav>
        </div>





        </div>

      </div>
    </section><!-- End Portfolio Section -->


    </div>

    {{-- @else
    <p class="text-center fs-4">No post found.</p>
    @endif --}}

@endsection