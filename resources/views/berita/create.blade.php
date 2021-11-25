
@extends('dashboard/layouts/main')

@section('title', 'Tambah berita')

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
                        <h6 class="h2 text-white d-inline-block mb-0">Form Tambah berita</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/berita"> berita</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Tambah</li>
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
                        <h3 class="mb-0">Tambah Berita</h3>
                    </div>

                    <!-- body card -->
                    <form method="POST" action="/berita" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group ml-5 mr-5">
                            <label for="judul"> judul</label>
                            <input type="textarea" class="form-control  @error('judul') is-invalid @enderror" id="judul" placeholder="judul berita" name="judul" value="{{ old('judul') }}">
                            @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="link"> link Berita</label>
                            <input id="link" type="text" name="link" class="form-control  @error('link') is-invalid @enderror" id="link" placeholder="link berita" name="link" value="{{ old('link') }}">
                            @error('link')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group ml-5 mr-5">
                            <label for="isi"> isi Berita</label>
                            <input id="isi" type="hidden" name="isi" class="form-control  @error('isi') is-invalid @enderror" id="isi" placeholder="isi berita" name="isi" value="{{ old('isi') }}">
                            <trix-editor input="isi"></trix-editor>
                            @error('isi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="gambar"> gambar pendukung</label>
                            <input id="gambar" type="file" name="gambar" class="form-control  @error('gambar') is-invalid @enderror" id="gambar" placeholder="gambar berita" name="gambar" value="{{ old('gambar') }}">
                            {{-- <trix-editor input="gambar"></trix-editor> --}}
                            @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary ml-5">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- End Main content -->
    @endsection
