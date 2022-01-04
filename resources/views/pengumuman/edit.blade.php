
@extends('dashboard/layouts/main')

@section('title', 'Edit Pengumuman')

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
                        <h6 class="h2 text-white d-inline-block mb-0">Edit Pengumuman</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/oengumuman"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/pengumuman"> Pengumuman</a></li>
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
                        <h3 class="mb-0">Edit Pengumuman</h3>
                    </div>

                    <!-- body card -->
                    <form method="POST" action="/pengumuman/{{ $pengumuman->id }}">
                        @method('put')
                        @csrf

                        <div class="form-group ml-5 mr-5">
                            <label for="judul">Isi judul</label>
                            <input type="text" class="form-control  @error('judul') is-invalid @enderror" id="judul" placeholder="Isi judul" name="judul" value="{{ old('judul', $pengumuman->judul) }}">
                            @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="pengumuman">Isi Pengumuman</label>
                            <input type="textarea" class="form-control  @error('pengumuman') is-invalid @enderror" id="pengumuman" placeholder="Isi Pengumuman" name="pengumuman" value="{{ old('pengumuman', $pengumuman->pengumuman) }}">
                            @error('pengumuman')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="berlaku">Berlaku Hingga</label>
                            <input type="date" class="form-control  @error('berlaku') is-invalid @enderror" id="berlaku" placeholder="berlaku hingga" name="berlaku" value="{{ old('berlaku',$pengumuman->berlaku) }}">
                            @error('berlaku')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="link"> Link</label>
                            <input type="text" class="form-control  @error('link') is-invalid @enderror" id="link" placeholder="link" name="link" value="{{ old('link', $pengumuman->link) }}">
                            @error('link')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="file_download">File Surat UNS</label>
                            <input type="file" class="form-control @error('file_download') is-invalid @enderror" id="file_download" placeholder="catatan" name="file_download" value="{{ old('file_download') }}">
                            <a href="{{ asset('storage/' . $pengumuman->file_download) }}"></a>
                            @error('file_download')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary ml-5 mb-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewPdf(){
            const pdf = document.querySelector('#pdf');
            const pdfPreview = document.querySelector('.pdf-preview');

            pdfPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(pdf.files[0]);

            ofReader.onload = function(ofREvent){
                pdfPreview.src = ofReader.target.result;
            }

        }
    </script>
    <!-- End Main content -->
    @endsection
