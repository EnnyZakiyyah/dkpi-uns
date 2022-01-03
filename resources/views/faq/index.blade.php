@extends('dashboard/layouts/main')

@section('title', 'FAQ')
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
  <!-- Header -->
  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">FAQ</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="/faq"> FAQ</a></li>
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
            <h3 class="mb-0">FAQ</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            {{-- <a href="{{'/faq/create'}}" class="btn btn-primary">Tambah Data</a> --}}
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="no">No</th>
                  <th scope="col" class="sort" data-sort="nim">pertanyaan</th>
                  <th scope="col" class="sort" data-sort="nama">jawaban</th>
                  <th scope="col" class="sort" data-sort="nama">Aksi</th>
                </tr>
              </thead>
              <tbody class="list">
                @foreach($faqs as $faq)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{!! $faq->pertanyaan !!}</td>
                  <td>{{ $faq->jawaban }}</td>
                  <td>
                    <a href="/faq/{{ $faq->id }}/edit" class="badge badge-info">Detail</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- Card footer -->
          <div class="card-footer py-4">
            <nav aria-label="...">
              <a href="{{'/faq/create'}}" class="btn btn-primary">Tambah Data</a>
              <ul class="pagination justify-content-end mb-0">
                <li class="page-item">
                  {{ $faqs->links() }}
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
