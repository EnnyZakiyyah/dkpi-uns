@extends('layouts.main')
@section('container')

<!-- ======= PDLN Dosen Section ======= -->
<br>
<section id="pdln" class="portfolio" style="background-color: #f3f5fa">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Data PDLN</h2>
            <p>Perjalanan Dinas Luar Negeri (PDLN) adalah adalah penugasan yang dilakukan oleh mahasiswa, dosen, maupun
                pimpinan dalam rangka tugas belajar dan tugas dinas lainnya di luar negeri yang disetujui oleh Rektor
                UNS</p>
        </div>
    
            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <a href="/home/pdln-mahasiswa">Mahasiswa</a>
                <a class="filter-active" href="/home/pdln-dosen">Dosen</a>
                <a href="/home/pdln-pimpinan">Pimpinan</a>
            </ul>

        <p>
            <button class="bi bi-search btn btn-success" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Cari Data
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="validationCustom01" name="nama"
                            value="{{ request('nama') }}">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Waktu Mulai</label>
                        <input type="text" class="form-control" id="validationCustom02" name="jangka_waktu_awal"
                            value="{{ request('jangka_waktu_awal') }}">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Waktu Berakhir</label>
                        <input type="text" class="form-control" id="validationCustom03" name="jangka_waktu_akhir"
                            value="{{ request('jangka_waktu_akhir') }}">
                        <div class="invalid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Negara</label>
                        <input type="text" class="form-control" id="validationCustom03" name="negara"
                            value="{{ request('negara') }}">
                        <div class="invalid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-warning" type="submit">Cari Data</button>
                    </div>
                </form>
            </div>
        </div>

        <br />


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <div class="portfolio-item filter-dosen">
                <div style="overflow-x:auto;">
                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr class="text-primary">
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Unit Kerja</th>
                                <th scope="col">Negara</th>
                                <th scope="col">Tujuan</th>
                                <th scope="col">Awal</th>
                                <th scope="col">Akhir</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dosens as $dosen)
                            <tr>
                                <th scope="row">{{ $dosens->firstItem() + $loop->index }}</th>
                                <td>{{ $dosen->nama }}</td>
                                <td>{{ $dosen->unit_kerja }}</td>
                                <td>{{ $dosen->negara }}</td>
                                <td>{{ $dosen->tujuan }}</td>
                                <td>{{ $date = empty(strtotime($dosen->jangka_waktu_awal)) ? $dosen->jangka_waktu_awal : Carbon\Carbon::parse(date('Y-m-d', strtotime($dosen->jangka_waktu_awal)))->isoFormat('D MMMM Y'); }}
                                </td>
                                <td>{{ $date = empty(strtotime($dosen->jangka_waktu_akhir)) ? $dosen->jangka_waktu_akhir : Carbon\Carbon::parse(date('Y-m-d', strtotime($dosen->jangka_waktu_akhir)))->isoFormat('D MMMM Y'); }}
                                </td>
                                <td>{{ $dosen->status }}</td>
                                <td>
                                    <a href="/home/pdln/{{ $dosen->id }}" class="badge bg-info"><span
                                            data-feather="eye">lihat</span></a>
                                    @if (Auth::check())
                                    <a href="/pdln/{{ $dosen->id }}/edit" class="badge bg-warning"><span
                                            data-feather="eye">edit</span></a>
                                    <form action="/pdln/{{ $dosen->id }}/delete" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="badge bg-danger"
                                            onclick="return confirm('apakah anda yakin?')">Delete</button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-sm responsive justify-content-center">
                        <li class="page-item">
                            {{ $dosens->links() }}
                        </li>
                    </ul>
                </nav>
            </div>
        </div>


    </div>
</section><!-- End PDLN Dosen Section -->
@endsection
