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
       
                {{-- <label for="tahun" class="form-label">Tampilkan Data Tahun</label>  
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2">Search</button>
                  </div> --}}
                  <section id="data-pdln" class="services section-bg">
                    <div class="container" data-aos="fade-up">
              
                  <p>
                    <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <i class="bi bi-search"></i> Cari Data 
                    </button>
                  </p>
                  <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <form>
                            <div class="container">
                                <div class="row row-cols-2">
                                  <div class="col">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama" aria-describedby="nama">
                                        </div>
                                  </div>
                                  <div class="col">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Waktu Mulai</label>
                                            <input type="date" class="form-control" id="nama" aria-describedby="nama">
                                        </div>
                                  </div>
                                  <div class="col">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Tujuan</label>
                                            <input type="text" class="form-control" id="nama" aria-describedby="nama">
                                        </div>
                                  </div>
                                  <div class="col">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Waktu Berakhir</label>
                                            <input type="date" class="form-control" id="nama" aria-describedby="nama">
                                        </div>
                                  </div>
                                  <div class="col">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Negara</label>
                                            <input type="text" class="form-control" id="nama" aria-describedby="nama">
                                        </div>
                                  </div>
                                  <div class="col-3">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Status</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Status</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                              </select>
                                        </div>
                                  </div>
                                  <div class="col-3">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Tahun</label>
                                            <input type="text" class="form-control" id="nama" aria-describedby="nama">
                                        </div>
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Cari Data</button>
                              </div>
                           
                          
                          </form>
                    </div>
                  </div>
                </div>
            </section><!-- End Services Section -->

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter=".filter-mahasiswa">Mahasiswa</li>
          <li data-filter=".filter-dosen">Dosen</li>
          <li data-filter=".filter-pimpinan">Pimpinan</li>
        </ul>

        
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <!-- CV/PT -->
       
        <div class="portfolio-item filter-mahasiswa">
           
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
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                </tr>
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

          <!-- Sekolah/Yayasan -->
          <div class="portfolio-item filter-sch">
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
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                </tr>
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