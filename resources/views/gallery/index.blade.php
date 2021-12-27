@extends('dashboard/layouts/main')

@section('title', 'Galeri')
@section('search')
<form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" action="/faq">
  <div class="form-group mb-0">
    <div class="input-group input-group-alternative input-group-merge">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-search"></i></span>
      </div>
      <input class="form-control" placeholder="Search" type="text" name="pertanyaan" value="{{ request('pertanyaan') }}">
    </div>
  </div>
  <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</form>
@endsection
@section('container')
<style type="text/css">
    .pagination li{
        float: left;
        list-style-type: none;
        margin:5px;
    }
  </style>
  <!-- Header -->
  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Galeri</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="/Gallery">Galeri</a></li>
                <li class="breadcrumb-item active" aria-current="page"> index</li>
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
            <h3 class="mb-0">Galeri</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            {{-- <a href="{{'/faq/create'}}" class="btn btn-primary">Tambah Data</a> --}}
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="no">No</th>
                  <th scope="col" class="sort" data-sort="nim">Judul</th>
                  <th scope="col" class="sort" data-sort="nama">Caption</th>
                  <th scope="col" class="sort" data-sort="nama">Aksi</th>
                </tr>
              </thead>
              <tbody class="list">
                @foreach ($galleries as $galeri)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $galeri->judul }}</td>
                  <td><iframe width="350" height="150" src="{{ $galeri->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                  <td>{!! $galeri->caption !!}</td>
                  <td>
                    <a href="/gallery/{{ $galeri->id }}/edit" class="badge badge-info">Detail</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- Card footer -->
          <div class="card-footer py-4">
            <nav aria-label="...">
              <a href="{{'/gallery/create'}}" class="btn btn-primary">Tambah Data</a>
              <ul class="pagination justify-content-end mb-0">
                <li class="page-item">
                  {{ $galleries->links() }}
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
