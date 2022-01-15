
@extends('dashboard/layouts/main')

@section('title', 'Tambah FAQ')

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
                        <h6 class="h2 text-white d-inline-block mb-0">Form Edit FAQ</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/faq"> FAQ</a></li>
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
                        <h3 class="mb-0">Edit FAQ</h3>
                    </div>

                    <!-- body card -->
                    <form method="POST" action="/faq/{{ $faq->id }}">
                        @method("put")
                        @csrf

                        <div class="form-group ml-5 mr-5">
                            <label for="pertanyaan"> Pertanyaan</label>
                            <input type="text" name="pertanyaan" class="form-control  @error('pertanyaan') is-invalid @enderror" id="pertanyaan" placeholder="pertanyaan" name="pertanyaan" value="{{ old('pertanyaan', $faq->pertanyaan) }}">
                            @error('pertanyaan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group ml-5 mr-5">
                            <label for="jawaban"> Jawaban</label>
                            <textarea  id="editor" type="hidden" name="jawaban" class="form-control  @error('jawaban') is-invalid @enderror" id="jawaban" placeholder="jawaban" name="jawaban" value="{{ old('jawaban', $faq->jawaban) }}">
                                {{ $faq->jawaban }}
                            </textarea>
                            @error('jawaban')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group ml-5 mr-5">
                            <label for="link"> Link</label>
                            <input type="textarea" class="form-control  @error('link') is-invalid @enderror" id="link" placeholder="cth: /home/layanan" name="link" value="{{ old('link',$faq->link) }}">
                            @error('link')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary ml-5 mb-5">Submit</button>
                    </form>

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
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Main content -->
    @endsection
