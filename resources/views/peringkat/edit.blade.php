
@extends('dashboard/layouts/main')

@section('title', 'Edit peringkat')

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
                        <h6 class="h2 text-white d-inline-block mb-0">Form Edit peringkat</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/peringkat"> peringkat</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Edit</li>
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
                        <h3 class="mb-0">edit peringkat</h3>
                    </div>
                    {{-- <img src="storage/app/{{ $peringkat->gambar }}" > --}}


                    <!-- body card -->
                    <form method="POST" action="/peringkat/{{ $peringkat->id }}">
                        @method('put')
                        @csrf

                        <div class="form-group ml-5 mr-5">
                            <label for="judul"> judul</label>
                            <input type="textarea" class="form-control  @error('judul') is-invalid @enderror" id="judul" placeholder="judul peringkat" name="judul" value="{{ old('judul', $peringkat->judul) }}">
                            @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="peringkat"> ganti peringkat</label>
                            <input id="peringkat" type="text" name="peringkat" class="form-control  @error('peringkat') is-invalid @enderror" id="peringkat" placeholder="peringkat peringkat" name="peringkat" value="{{ old('peringkat', $peringkat->peringkat) }}">
                            @error('peringkat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="link"> link peringkat</label>
                            <input id="link" type="text" name="link" class="form-control  @error('link') is-invalid @enderror" id="link" placeholder="link peringkat" name="link" value="{{ old('link',$peringkat->link) }}">
                            @error('link')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group ml-5 mr-5">
                            <label for="berita"> berita peringkat</label>
                            <textarea  id="editor" type="hidden" name="berita" class="form-control  @error('berita') is-invalid @enderror" id="berita" placeholder="berita berita" name="berita" value="{{ old('berita') }}">
                                    {{ $peringkat->berita }}
                            </textarea>
                            @error('berita')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary ml-5">Submit</button>
                        <a href="/peringkat" class="card-link ml-5">Kembali</a>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <!-- End Main content -->
    @endsection
