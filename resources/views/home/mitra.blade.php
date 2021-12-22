@extends('layouts.main')
@section('container')
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">

      <!-- ======= Portfolio Section ======= -->
      <section id="mitra" class="portfolio"  style="background-color: #f3f5fa">
      <div class="container" data-aos="fade-up">



        <div class="section-title">
          <h2>Mitra Kerja Sama</h2>
            <p>Data Mitra yang menjalin hubungan kerjasama dengan UNS dapat dilihat pada tabel berikut</p>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter=".filter-yayasan">Sekolah/Yayasan</li>
            <a href="/home/mitra-yayasan">yayasan</a>
            <li data-filter=".filter-cv">CV/PT</li>
          <li data-filter=".filter-internasional">Internasional</li>
          <li data-filter=".filter-jasaKeuangan"><center>Jasa Keuangan</center></li>
          <li data-filter=".filter-pemerintah">Pemerintah</li>
        </ul>

        <p>
          <button class="bi bi-search btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Cari Data
          </button>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <form class="row g-3 needs-validation" action="/home/mitra">
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Nama Instansi</label>
                <input type="text" class="form-control" id="validationCustom01" name="nama_instansi" value="{{ request('nama_instansi') }}" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Awal</label>
                <input type="date" class="form-control" id="validationCustom02" name="waktu_mulai" value="{{ request('waktu_mulai') }}" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              {{-- <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Nomor MoU UNS</label>
                <input type="text" class="form-control" id="validationCustom03" name="nomor_mou"required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div> --}}
              <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Akhir</label>
                <input type="date" class="form-control" id="validationCustom03" name="waktu_berakhir" value="{{ request('waktu_berakhir') }}" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
              {{-- <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Nomor MoU Mitra</label>
                <input type="text" class="form-control" id="validationCustom03" name="nomor_mitra" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div> --}}
              <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Pejabat Penandatangan</label>
                <input type="text" class="form-control" id="validationCustom03" name="pejabat" value="{{ request('pejabat') }}" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
              {{-- <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Tahun</label>
                <input type="text" class="form-control" id="validationCustom03" name="tahun" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div> --}}
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
                <h5>YAYASAN/SEKOLAH</h5>
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
                @foreach($yayasans as $yayasan)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $yayasan->nama_instansi }}</td>
                  <td>{{ $yayasan->ruang_lingkup }}</td>
                  <td>{{ $yayasan->jangka_waktu_awal }}</td>
                  <td>{{ $yayasan->jangka_waktu_akhir }}</td>
                  <td>{{ $yayasan->pejabat_penandatangan }}</td>
                  <td>{{ $yayasan->status }}</td>
                  <td>
                    <a href="/home/mitra/{{ $yayasan->id }}" class="badge bg-info"><span data-feather="eye">lihat</span></a>
                    @if (Auth::check())
                    <a href="/mitra/{{ $yayasan->id }}/edit" class="badge bg-warning"><span data-feather="eye">edit</span></a>
                    <form action="/mitra/{{ $yayasan->id }}" method="POST" class="d-inline">
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
                  {{ $yayasans->links() }}
                </li>
              </ul>
            </nav>
        </div>


        <div class="portfolio-item filter-cv">
            <table class="table table-hover">
                <h5>CV/PT</h5>
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
                @foreach($cvs as $cv)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $cv->nama_instansi }}</td>
                  <td>{{ $cv->ruang_lingkup }}</td>
                  <td>{{ $cv->jangka_waktu_awal }}</td>
                  <td>{{ $cv->jangka_waktu_akhir }}</td>
                  <td>{{ $cv->pejabat_penandatangan }}</td>
                  <td>{{ $cv->status }}</td>
                  <td>
                    <a href="/home/mitra/{{ $cv->id }}" class="badge bg-info"><span data-feather="eye">lihat</span></a>
                    @if (Auth::check())
                    <a href="/mitra/{{ $cv->id }}/edit" class="badge bg-warning"><span data-feather="eye">edit</span></a>
                    <form action="/mitra/{{ $cv->id }}" method="POST" class="d-inline">
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
                  {{ $cvs->links() }}
                </li>
              </ul>
            </nav>
        </div>
        <div class="portfolio-item filter-internasional">
            <table class="table table-hover">
                <h5>INTERNASIONAL</h5>
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
                @foreach($internasionals as $internasional)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $internasional->nama_instansi }}</td>
                  <td>{{ $internasional->ruang_lingkup }}</td>
                  <td>{{ $internasional->jangka_waktu_awal }}</td>
                  <td>{{ $internasional->jangka_waktu_akhir }}</td>
                  <td>{{ $internasional->pejabat_penandatangan }}</td>
                  <td>{{ $internasional->status }}</td>
                  <td>
                    <a href="/home/mitra/{{ $internasional->id }}" class="badge bg-info"><span data-feather="eye">lihat</span></a>
                    @if (Auth::check())
                    <a href="/mitra/{{ $internasional->id }}/edit" class="badge bg-warning"><span data-feather="eye">edit</span></a>
                    <form action="/mitra/{{ $internasional->id }}" method="POST" class="d-inline">
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
                  {{ $internasionals->links() }}
                </li>
              </ul>
            </nav>
        </div>
        <div class="portfolio-item filter-jasaKeuangan">
            <table class="table table-hover">
                <h5>JASA KEUANGAN</h5>
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
                @foreach($jasaKeuangans as $jasaKeuangan)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $jasaKeuangan->nama_instansi }}</td>
                  <td>{{ $jasaKeuangan->ruang_lingkup }}</td>
                  <td>{{ $jasaKeuangan->jangka_waktu_awal }}</td>
                  <td>{{ $jasaKeuangan->jangka_waktu_akhir }}</td>
                  <td>{{ $jasaKeuangan->pejabat_penandatangan }}</td>
                  <td>{{ $jasaKeuangan->status }}</td>
                  <td>
                    <a href="/home/mitra/{{ $jasaKeuangan->id }}" class="badge bg-info"><span data-feather="eye">lihat</span></a>
                    @if (Auth::check())
                    <a href="/mitra/{{ $jasaKeuangan->id }}/edit" class="badge bg-warning"><span data-feather="eye">edit</span></a>
                    <form action="/mitra/{{ $jasaKeuangan->id }}" method="POST" class="d-inline">
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
                  {{ $jasaKeuangans->links() }}
                </li>
              </ul>
            </nav>
        </div>
        <div class="portfolio-item filter-pemerintah">
            <table class="table table-hover">
                <h5>PEMERINTAH</h5>
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
                @foreach($pemerintahs as $pemerintah)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $pemerintah->nama_instansi }}</td>
                  <td>{{ $pemerintah->ruang_lingkup }}</td>
                  <td>{{ $pemerintah->jangka_waktu_awal }}</td>
                  <td>{{ $pemerintah->jangka_waktu_akhir }}</td>
                  <td>{{ $pemerintah->pejabat_penandatangan }}</td>
                  <td>{{ $pemerintah->status }}</td>
                  <td>
                    <a href="/home/mitra/{{ $pemerintah->id }}" class="badge bg-info"><span data-feather="eye">lihat</span></a>
                    @if (Auth::check())
                    <a href="/mitra/{{ $pemerintah->id }}/edit" class="badge bg-warning"><span data-feather="eye">edit</span></a>
                    <form action="/mitra/{{ $pemerintah->id }}" method="POST" class="d-inline">
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
                  {{ $pemerintahs->links() }}
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
