@extends('dashboard/layouts/main')

@section('title', 'Tambah Data PDLN')

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
                        <h6 class="h2 text-white d-inline-block mb-0">Edit Data PDLN</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/pdln"> PDLN</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
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
                        <h3 class="mb-0">Edit Data PDLN</h3>
                    </div>

                    <!-- body card -->
                    <form method="POST" action="/pdln/{{ $pdln->id }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group ml-5 mr-5">
                            <label for="jenis" class="form-select" >Jenis</label>
                            <select class="form-control  @error('jenis') is-invalid @enderror" id="jenis" placeholder="kategori" name="jenis"  value="{{ old('jenis', $pdln->jenis) }}">
                            <option value="{{ $pdln->jenis }}">{{ $pdln->jenis }}</option>
                            <option value="mahasiswa">Mahasiswa</option>
                            <option value="dosen">Dosen</option>
                            <option value="pimpinan">Pimpinan</option>
                            </select>

                            @error('jenis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control  @error('nama') is-invalid @enderror" id="nama" placeholder="Nama jenis" name="nama" value="{{ old('nama', $pdln->nama) }}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="status" class="form-select" >Status</label>
                            <select class="form-control  @error('status') is-invalid @enderror" id="status" placeholder="kategori" name="status"  value="{{ old('status', $pdln->status) }}">
                            <option value="{{ $pdln->status }}">{{ $pdln->status }}</option>
                            <option value="diterima">Diterima</option>
                            <option value="proses UNS">Proses UNS</option>
                            <option value="proses dikti">Proses Dikti</option>
                            </select>

                            @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="jumlah_orang">Jumlah Orang</label>
                            <input type="text" class="form-control @error('jumlah_orang') is-invalid @enderror" id="jumlah_orang" placeholder="nomor surat" name="jumlah_orang" value="{{ old('jumlah_orang', $pdln->jumlah_orang) }}">
                            @error('jumlah_orang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="unit_kerja">Unit Kerja</label>
                            <input type="text" class="form-control @error('unit_kerja') is-invalid @enderror" id="unit_kerja" placeholder="nomor surat" name="unit_kerja" value="{{ old('unit_kerja', $pdln->unit_kerja) }}">
                            @error('unit_kerja')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="jangka_waktu_awal">Jangka Waktu Awal</label>
                            <input type="date" class="form-control @error('jangka_waktu_awal') is-invalid @enderror" id="jangka_waktu_awal" placeholder="jangka waktu Awal" name="jangka_waktu_awal" value="{{ old('jangka_waktu_awal', $pdln->jangka_waktu_awal) }}">
                            @error('jangka_waktu_awal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="jangka_waktu_akhir">Jangka Waktu Akhir</label>
                            <input type="date" class="form-control @error('jangka_waktu_akhir') is-invalid @enderror" id="jangka_waktu_akhir" placeholder="Jangka Waktu Akhir" name="jangka_waktu_akhir" value="{{ old('jangka_waktu_akhir', $pdln->jangka_waktu_akhir) }}">
                            @error('jangka_waktu_akhir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="tujuan">Tujuan</label>
                            <input type="text"
                            class="form-control @error('tujuan') is-invalid @enderror"
                            id="tujuan"
                            placeholder="tujuan keberangkatan"
                            name="tujuan"
                            value="{{ old('tujuan', $pdln->tujuan) }}">
                            @error('tujuan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="negara">Negara</label>
                            <input type="text"
                            class="form-control @error('negara') is-invalid @enderror"
                            id="negara"
                            placeholder="negara tujuan"
                            name="negara"
                            value="{{ old('negara', $pdln->negara) }}">
                            @error('negara')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="surat_uns">Surat UNS</label>
                            <input type="text"
                            class="form-control @error('surat_uns') is-invalid @enderror"
                            id="surat_uns"
                            placeholder="nomor surat"
                            name="surat_uns"
                            value="{{ old('surat_uns', $pdln->surat_uns) }}">
                            @error('surat_uns')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="catatan_uns">Catatan UNS</label>
                            <input type="textarea"
                            class="form-control @error('catatan_uns') is-invalid @enderror"
                            id="catatan_uns"
                            placeholder="catatan"
                            name="catatan_uns"
                            value="{{ old('catatan_uns', $pdln->catatan_uns) }}">
                            @error('catatan_uns')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="belmawa">Nomor Belmawa</label>
                            <input type="text"
                            class="form-control @error('belmawa') is-invalid @enderror"
                            id="belmawa"
                            placeholder="nomor surat"
                            name="belmawa"
                            value="{{ old('belmawa', $pdln->belmawa) }}">
                            @error('belmawa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="catatan_belmawa">Catatan Belmawa</label>
                            <input type="text"
                            class="form-control @error('catatan_belmawa') is-invalid @enderror"
                            id="catatan_belmawa"
                            placeholder="catatan"
                            name="catatan_belmawa"
                            value="{{ old('catatan_belmawa', $pdln->catatan_belmawa) }}">
                            @error('catatan_belmawa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <div class="form-group ml-5 mr-5">
                            <label for="ktln_kemensetneg">Ktln Kemensetneg</label>
                            <input type="text" class="form-control @error('ktln_kemensetneg') is-invalid @enderror" id="ktln_kemensetneg" placeholder="nomor surat kemensetneg" name="ktln_kemensetneg" value="{{ old('ktln_kemensetneg', $pdln->ktln_kemensetneg) }}">
                            @error('ktln_kemensetneg')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="catatan_setneg">Catatan Setneg</label>
                            <input type="textarea" class="form-control @error('catatan_setneg') is-invalid @enderror" id="catatan_setneg" placeholder="catatan" name="catatan_setneg" value="{{ old('catatan_setneg', $pdln->catatan_setneg) }}">
                            @error('catatan_setneg')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="file_surat_uns">File Surat UNS</label>
                            <input type="file" class="form-control @error('file_surat_uns') is-invalid @enderror" id="file_surat_uns" placeholder="catatan" name="file_surat_uns" value="{{ old('file_surat_uns') }}">
                            @error('file_surat_uns')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="file_belmawa">File Belmawa</label>
                            <input type="file" class="form-control @error('file_belmawa') is-invalid @enderror" id="file_belmawa" placeholder="catatan" name="file_belmawa" value="{{ old('file_belmawa') }}">
                            @error('file_belmawa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="file_ktln">File Ktln</label>
                            <input type="file" class="form-control @error('file_ktln') is-invalid @enderror" id="file_ktln" placeholder="catatan" name="file_ktln" value="{{ old('file_ktln') }}">
                            @error('file_ktln')
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
