@extends('layouts.main')
@section('container')
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">

      <!-- ======= Portfolio Section ======= -->
      <section id="pdln" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Data PDLN</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <nav class="navbar navbar-light blue-grey lighten-5">
          <form class="form-inline">
            <button class="btn btn-outline-success" type="button">Main button</button>
            <button class="btn btn-sm align-middle btn-outline-secondary" type="button">Smaller button</button>
            <button class="btn btn-sm btn-secondary" type="button">Smaller button</button>
            <button class="btn align-middle btn-primary" type="button">Smaller button</button>
          </form>
        </nav>

                {{-- <label for="tahun" class="form-label">Tampilkan Data Tahun</label>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2">Search</button>
                  </div> --}}

                  <h2>Filter DIV Elements</h2>


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <!-- CV/PT -->

            <div class="portfolio-item filter-mahasiswa">

            <table class="table table-hover">

              <thead>
                <tr class="text-primary">
                  <th scope="col">No.</th>
                  <th scope="col">Nama</th>
                  <th scope="col">unit kerja</th>
                  <th scope="col">negara</th>
                  <th scope="col">awal</th>
                  <th scope="col">akhir</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($mahasiswas as $mahasiswa)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $mahasiswa->nama }}</td>
                  <td>{{ $mahasiswa->unit_kerja }}</td>
                  <td>{{ $mahasiswa->negara }}</td>
                  <td>{{ $mahasiswa->jangka_waktu_awal }}</td>
                  <td>{{ $mahasiswa->jangka_waktu_akhir }}</td>
                  <td>{{ $mahasiswa->status }}</td>
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
            <div class="portfolio-item filter-dosen">

                <table class="table table-hover">

                  <thead>
                    <tr class="text-primary">
                      <th scope="col">No.</th>
                      <th scope="col">Nama</th>
                      <th scope="col">unit kerja</th>
                      <th scope="col">negara</th>
                      <th scope="col">awal</th>
                      <th scope="col">akhir</th>
                      <th scope="col">Status</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($dosens as $dosen)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $dosen->nama }}</td>
                      <td>{{ $dosen->unit_kerja }}</td>
                      <td>{{ $dosen->negara }}</td>
                      <td>{{ $dosen->jangka_waktu_awal }}</td>
                      <td>{{ $dosen->jangka_waktu_akhir }}</td>
                      <td>{{ $dosen->status }}</td>
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
                <div class="portfolio-item filter-pimpinan">

                    <table class="table table-hover">

                      <thead>
                        <tr class="text-primary">
                          <th scope="col">No.</th>
                          <th scope="col">Nama</th>
                          <th scope="col">unit kerja</th>
                          <th scope="col">negara</th>
                          <th scope="col">awal</th>
                          <th scope="col">akhir</th>
                          <th scope="col">Status</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($pimpinans as $pimpinan)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $pimpinan->nama }}</td>
                          <td>{{ $pimpinan->unit_kerja }}</td>
                          <td>{{ $pimpinan->negara }}</td>
                          <td>{{ $pimpinan->jangka_waktu_awal }}</td>
                          <td>{{ $pimpinan->jangka_waktu_akhir }}</td>
                          <td>{{ $pimpinan->status }}</td>
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
