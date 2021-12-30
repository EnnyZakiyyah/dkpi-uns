@extends('dashboard/layouts/main')

@section('title', 'Data galeri')

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
                        <h6 class="h2 text-white d-inline-block mb-0">Data Galeri</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/gallery"> Galeri</a></li>
                                {{-- <li class="breadcrumb-item"><a href="#"> {{ $gallery->instansi }}</a></li> --}}
                                <li class="breadcrumb-item active" aria-current="page"> {{ $gallery->judul }}</li>
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
                        <h3 class="mb-0">Detail Galeri</h3>
                    </div>
                    @if (session('success'))
                    <div class="alert-success">
                       <p>{{ session('success') }}</p>
                    </div>
                @endif
                    <!-- body card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Judul Video : {{ $gallery->judul}}</h5>

                            <iframe  width="650" height="370" src="{{ $gallery->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br/><br/><br/>
                            <p class="card-text">Caption : {!! $gallery->caption !!}</p>
                            <p class="card-text">Tgl Dibuat : {{ $gallery->created_at }}</p>
                            <a href="/gallery/{{ $gallery->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="/gallery/{{ $gallery->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
                            </form>
                            <a href="/gallery" class="card-link ml-5">Kembali</a>
                        </div>
                    </div>

                   
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
