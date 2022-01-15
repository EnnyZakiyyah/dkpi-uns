@extends('dashboard/layouts/main')

@section('title', 'Database mitra')

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
                        <h6 class="h2 text-white d-inline-block mb-0">Data Mitra</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/mitra"> Mitra</a></li>
                                <li class="breadcrumb-item"><a
                                        href="/mitra/data/{{ $mitra->instansi }}">{{ $mitra->instansi }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> {{ $mitra->nama_instansi }}</li>
                            </ol>
                        </nav>
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
                        <h4 class="badge badge-info">{{ $mitra->status }}</h4>
                    </div>

                    <!-- body card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nama instansi: {{ $mitra->nama_instansi}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted"> jenis Instansi: {{ $mitra->instansi}}</h6>
                            <p class="card-text">Nomor MoU UNS: {{ $mitra->no_mou_uns }}</p>
                            <p class="card-text">Nomor MoU Mitra: {{ $mitra->no_mou_mitra }}</p>
                            <p class="card-text">Ruang Lingkup: {{ $mitra->ruang_lingkup }}</p>
                            <p class="card-text">Awal Masa Berlaku: {{ $mitra->jangka_waktu_awal }}</p>
                            <p class="card-text">Akhir Masa Berlaku: {{ $mitra->jangka_waktu_akhir }}</p>
                            <p class="card-text">Pejabat Penandatangan: {{ $mitra->pejabat_penandatangan }}</p>
                            <a href="download/mou/{{ $mitra->id }}" class="btn btn-warning mt-2">Download File MoU</a>
                            <a href="{{ $mitra->id }}/edit" class="btn btn-primary mt-2">Edit</a>
                            <form action="{{ $mitra->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger mt-2"
                                    onclick="return confirm('apakah anda yakin?')">Delete</button>
                            </form>
                            <a href="/mitra" class="card-link ml-5 mt-2">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main content -->
@endsection
