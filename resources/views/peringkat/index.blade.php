@extends('dashboard/layouts/main')

@section('title', 'Dashboard')

@section('container')
  <!-- Header -->
  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">peringkat</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="/peringkat"> peringkat</a></li>
                <li class="breadcrumb-item active" aria-current="page"> index</li>
              </ol>
            </nav>
          </div>
          {{-- <div class="col-lg-6 col-5 text-right">
            <a href="/peringkat/create" class="btn btn-sm btn-neutral">New</a>
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
            <h3 class="mb-0">THES</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            {{-- <a href="{{'/peringkat/create'}}" class="btn btn-primary">Tambah Data</a> --}}
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="no">peringkat</th>
                  <th scope="col" class="sort" data-sort="nim">Judul</th>
                  <th scope="col" class="sort" data-sort="nama">link</th>
                  <th scope="col" class="sort" data-sort="nama">action</th>
                </tr>
              </thead>
              <tbody class="list">
                @foreach($thes as $peringkat)
                <tr>
                  <th scope="row">{{ $peringkat->peringkat }}</th>
                  <td>{{ $peringkat->judul }}</td>
                  <td>{{ $peringkat->link }}</td>
                  <td>
                    <a href="/peringkat/{{ $peringkat->id }}/edit" class="badge badge-info">Detail</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div >

</div>
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col">
        <div class="card">
  <div class="card-header border-0">
    <h3 class="mb-0">QS Star</h3>
  </div>
  <!-- Light table -->
  <div class="table-responsive">
    {{-- <a href="{{'/peringkat/create'}}" class="btn btn-primary">Tambah Data</a> --}}
    <table class="table align-items-center table-flush">
      <thead class="thead-light">
        <tr>
          <th scope="col" class="sort" data-sort="no">peringkat</th>
          <th scope="col" class="sort" data-sort="nim">Judul</th>
          <th scope="col" class="sort" data-sort="nama">link</th>
          <th scope="col" class="sort" data-sort="nama">action</th>
        </tr>
      </thead>
      <tbody class="list">
        @foreach($qs as $peringkat)
        <tr>
          <th scope="row">{{ $peringkat->peringkat }}</th>
          <td>{{ $peringkat->judul }}</td>
          <td>{{ $peringkat->link }}</td>
          <td>
            <a href="/peringkat/{{ $peringkat->id }}" class="badge badge-info">Detail</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
</div>
  <!-- End Main content -->
  @endsection
