@extends('dashboard/layouts/main')

@section('title', 'Data berita')

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
                        <h6 class="h2 text-white d-inline-block mb-0">Data berita</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/berita"> berita</a></li>
                                {{-- <li class="breadcrumb-item"><a href="#"> {{ $berita->instansi }}</a></li> --}}
                                <li class="breadcrumb-item active" aria-current="page"> {{ $berita->judul }}</li>
                            </ol>
                        </nav>
                    </div>
                    {{-- <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral">New</a>
                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                    </div> --}}
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
                        <h3 class="mb-0">Detail berita</h3>
                    </div>
                    @if (session('success'))
                    <div class="alert-success">
                       <p>{{ session('success') }}</p> 
                    </div>
                @endif
                    <!-- body card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita: {{ $berita->judul}}</h5>
                            <img src="{{asset('storage/'. $berita->gambar )}}" class="img-fluid mb-3 col-sm-5 d-block" alt="...">
                            <p class="card-text">{{ $berita->excerpt }}</p>
                            <p class="card-text">{{ $berita->body }}</p>
                            <p class="card-text">{{ $berita->published_at }}</p>
                            <p class="card-text">{{ $berita->created_at }}</p>
                            <a href="/berita/{{ $berita->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="/berita/{{ $berita->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="/berita" class="card-link ml-5">Kembali</a>
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
