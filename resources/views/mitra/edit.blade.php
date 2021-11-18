@extends('dashboard/layouts/main')

@section('title', 'Form Edit data mitra')

@section('container')

<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar links -->
            </div>
        </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Form Ubah Data Mitra</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#"> Mitra</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Edit</li>
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
                        <h3 class="mb-0">Detail Mitra</h3>
                    </div>

                    <!-- body card -->
                    <form method="POST" action="/detail-ruang/{{ $mitra->id }}">
                        @method('put')
                        @csrf
                        <div class="form-group ml-5 mr-5">
                            <label for="nama_instansi">Nama Instansi</label>
                            <input type="text" class="form-control  @error('nama_instansi') is-invalid @enderror" id="nama_instansi" placeholder="Nama Ruang" name="nama_instansi" value="{{ $mitra->nama_instansi }}">
                            @error('nama_instansi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="instansi">jenis instansi</label>
                            <input type="text" class="form-control @error('instansi') is-invalid @enderror" id="instansi" placeholder="Tipe Ruang" name="instansi" value="{{ $mitra->instansi }}">
                            @error('instansi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="no_mou_uns">nomor MoU UNS</label>
                            <input type="text" class="form-control @error('no_mou_uns') is-invalid @enderror" id="no_mou_uns" placeholder="Kapasitas Ruang" name="no_mou_uns" value="{{ $mitra->no_mou_uns }}">
                            @error('no_mou_uns')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="no_mou_mitra">nomor MoU Mitra</label>
                            <input type="text" class="form-control @error('no_mou_mitra') is-invalid @enderror" id="no_mou_mitra" placeholder="Kapasitas Ruang" name="no_mou_mitra" value="{{ $mitra->no_mou_mitra }}">
                            @error('no_mou_mitra')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="ruang_lingkup">Ruang Lingkup</label>
                            <input type="text" class="form-control @error('ruang_lingkup') is-invalid @enderror" id="ruang_lingkup" placeholder="Letak Ruang" name="ruang_lingkup" value="{{ $mitra->ruang_lingkup }}">
                            @error('ruang_lingkup')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="jangka_waktu_awal">Awal</label>
                            <input type="date" class="form-control @error('jangka_waktu_awal') is-invalid @enderror" id="jangka_waktu_awal" placeholder="Fungsi Alat" name="jangka_waktu_awal" value="{{ $mitra->jangka_waktu_awal }}">
                            @error('jangka_waktu_awal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="jangka_waktu_akhir">Akhir</label>
                            <input type="date" class="form-control @error('jangka_waktu_akhir') is-invalid @enderror" id="jangka_waktu_akhir" placeholder="Fungsi Alat" name="jangka_waktu_akhir" value="{{ $mitra->jangka_waktu_akhir }}">
                            @error('jangka_waktu_akhir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="pejabat_penandatangan">Pejabat Penandatangan</label>
                            <input type="text" class="form-control @error('pejabat_penandatangan') is-invalid @enderror" id="pejabat_penandatangan" placeholder="Letak Ruang" name="pejabat_penandatangan" value="{{ $mitra->pejabat_penandatangan }}">
                            @error('pejabat_penandatangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary ml-5">Submit</button>
                    </form>

                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <nav aria-label="...">
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
