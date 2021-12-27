@extends('dashboard/layouts/main')

@section('title', 'detail faq')

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
                        <h6 class="h2 text-white d-inline-block mb-0">Data  faq</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/faq"> faq</a></li>
                                {{-- <li class="breadcrumb-item"><a href="#"> {{ $faq->instansi }}</a></li> --}}
                                <li class="breadcrumb-item active" aria-current="page"> {{ $faq->judul }}</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="/faq/create" class="btn btn-sm btn-neutral">New</a>
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
                        <h3 class="mb-0">Detail faq</h3>
                    </div>

                    <!-- body card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $faq->pertanyaan}}</h5>
                            {{-- <h6 class="card-subtitle mb-2 text-muted">{{ $faq->instansi}}</h6> --}}
                            <p class="card-text">{{ $faq->jawaban }}</p>
                            <p class="card-text">{{ $faq->link }}</p>


                            <a href="{{ $faq->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="{{ $faq->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
                            </form>
                            <a href="/faq" class="card-link ml-5">Kembali</a>
                        </div>
                    </div>

                    <!-- Card footer -->
                    {{-- <div class="card-footer py-4">
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
                                        <span class="sr-only">Next</span> --}}
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
