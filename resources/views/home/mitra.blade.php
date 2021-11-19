@extends('layouts.main')
@section('container')
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">

      <!-- ======= Portfolio Section ======= -->
      <section id="mitra" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Mitra Kerja Sama</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter=".filter-cv">CV/PT</li>
          <li data-filter=".filter-yayasan">Sekolah/Yayasan</li>
          <li data-filter=".filter-internasional">Internasional</li>
          <li data-filter=".filter-jasaKeuangan"><center>Jasa Keuangan</center></li>
          <li data-filter=".filter-pemerintah">Pemerintah</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <!-- CV/PT -->
        <div class="portfolio-item filter-cv">
            <table class="table table-hover">
              <thead>
                <tr class="text-primary">
                  <th scope="col">No.</th>
                  <th scope="col">Nama Instansi</th>
                  <th scope="col">Ruang Lingkup</th>
                  <th scope="col">Waktu Mulai</th>
                  <th scope="col">Waktu Berakhir</th>
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
                  <td></td>
                </tr>
                @endforeach
              </tbody>
            </table>

            <!-- Pagination -->
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
        </div>
        <div class="portfolio-item filter-yayasan">
            <table class="table table-hover">
              <thead>
                <tr class="text-primary">
                  <th scope="col">No.</th>
                  <th scope="col">Nama Instansi</th>
                  <th scope="col">Ruang Lingkup</th>
                  <th scope="col">Waktu Mulai</th>
                  <th scope="col">Waktu Berakhir</th>
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
                  <td></td>
                </tr>
                @endforeach
              </tbody>
            </table>

            <!-- Pagination -->
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
        </div>
        <div class="portfolio-item filter-internasional">
            <table class="table table-hover">
              <thead>
                <tr class="text-primary">
                  <th scope="col">No.</th>
                  <th scope="col">Nama Instansi</th>
                  <th scope="col">Ruang Lingkup</th>
                  <th scope="col">Waktu Mulai</th>
                  <th scope="col">Waktu Berakhir</th>
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
                  <td></td>
                </tr>
                @endforeach
              </tbody>
            </table>

            <!-- Pagination -->
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
        </div>
        <div class="portfolio-item filter-jasaKeuangan">
            <table class="table table-hover">
              <thead>
                <tr class="text-primary">
                  <th scope="col">No.</th>
                  <th scope="col">Nama Instansi</th>
                  <th scope="col">Ruang Lingkup</th>
                  <th scope="col">Waktu Mulai</th>
                  <th scope="col">Waktu Berakhir</th>
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
                  <td></td>
                </tr>
                @endforeach
              </tbody>
            </table>

            <!-- Pagination -->
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
        </div>
        <div class="portfolio-item filter-pemerintah">
            <table class="table table-hover">
              <thead>
                <tr class="text-primary">
                  <th scope="col">No.</th>
                  <th scope="col">Nama Instansi</th>
                  <th scope="col">Ruang Lingkup</th>
                  <th scope="col">Waktu Mulai</th>
                  <th scope="col">Waktu Berakhir</th>
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
                  <td></td>
                </tr>
                @endforeach
              </tbody>
            </table>

            <!-- Pagination -->
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
        </div>



        </div>

      </div>
    </section><!-- End Portfolio Section -->


    </div>

@endsection
