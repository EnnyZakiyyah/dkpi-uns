@extends('dashboard/layouts/main')

@section('title', 'Dashboard')

@section('container')
  <!-- Header -->
  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Data Ruang</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#"> Ruang</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Ruang</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral">New</a>
            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-0">
            <h3 class="mb-0">Data Ruang</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="no">No</th>
                  <th scope="col" class="sort" data-sort="nim">Nama Ruang</th>
                  <th scope="col" class="sort" data-sort="nama">Tipe Ruang</th>
                  <th scope="col" class="sort" data-sort="tanggalpeminjaman">Kapasitas Ruang</th>
                  <th scope="col" class="sort" data-sort="tanggalpengembalian">Letak Ruang</th>
                  <th scope="col" class="sort" data-sort="namaruang">Fungsi Ruang</th>
                  <th scope="col" class="sort" data-sort="aksi">Aksi</th>
                </tr>
              </thead>
              <tbody class="list">
                {{-- @foreach($peminjaman_ruang as $rng)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $rng->nama_ruang }}</td>
                  <td>{{ $rng->tipe_ruang }}</td>
                  <td>{{ $rng->kapasitas_ruang}}</td>
                  <td>{{ $rng->letak_ruang }}</td>
                  <td>{{ $rng->fungsi_ruang }}</td>
                  <td>
                    <a href="/detail-ruang/{{ $rng->id }}" class="badge badge-info">Detail</a>
                  </td>
                </tr>
                @endforeach --}}
              </tbody>
            </table>
          </div>
          <!-- Card footer -->
          <div class="card-footer py-4">
            <nav aria-label="...">
              <a href="/dbRuang/create" class="btn btn-primary">Tambah Data</a>
              <ul class="pagination justify-content-end mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">
                    <i class="fas fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">
                    <i class="fas fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Main content -->
  @endsection