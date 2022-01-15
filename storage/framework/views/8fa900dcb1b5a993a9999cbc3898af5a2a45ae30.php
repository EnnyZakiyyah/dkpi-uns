
<?php $__env->startSection('container'); ?>

<!-- ======= Mitra Internasional Section ======= -->
<section id="mitra" class="portfolio" style="background-color: #f3f5fa">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Mitra Kerja Sama</h2>
            <p>Data Mitra yang menjalin hubungan kerjasama dengan UNS dapat dilihat pada tabel berikut</p>
        </div>

        <center>
            <ul id="portfolio-flters" class="justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <a href="/home/mitra-cv">CV/PT</a>
                <a href="/home/mitra-yayasan">Sekolah/Yayasan</a>
                <a class="filter-active" href="/home/mitra-internasional">Internasional</a>
                <a href="/home/mitra-jasaKeuangan">Jasa Keuangan</a>
                <a href="/home/mitra-pemerintah">Pemerintah</a>
            </ul>
        </center>
        <p>
            <button class="bi bi-search btn btn-success" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Cari Data
            </button>
        </p>

        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <form class="row g-3 needs-validation" action="/home/mitra-internasional">
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Nama Instansi</label>
                        <input type="text" class="form-control" id="validationCustom01" name="nama_instansi"
                            value="<?php echo e(request('nama_instansi')); ?>">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Awal</label>
                        <input type="text" class="form-control" id="validationCustom02" name="jangka_waktu_awal"
                            value="<?php echo e(request('jangka_waktu_awal')); ?>">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Akhir</label>
                        <input type="text" class="form-control" id="validationCustom03" name="jangka_waktu_akhir"
                            value="<?php echo e(request('jangka_waktu_akhir')); ?>">
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">Pejabat Penandatangan</label>
                        <input type="text" class="form-control" id="validationCustom03" name="pejabat_penandatangan"
                            value="<?php echo e(request('pejabat_penandatangan')); ?>">
                        <div class="invalid-feedback">
                            Please provide a valid city.
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
            <div class="portfolio-item filter-internasional">
                <div style="overflow-x:auto;">
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-primary">
                                <th scope="col">No.</th>
                                <th scope="col">Nama Instansi</th>
                                <th scope="col">Ruang Lingkup</th>
                                <th scope="col">Awal</th>
                                <th scope="col">Akhir</th>
                                <th scope="col">Pejabat Penandatangan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $internasionals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $internasional): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($internasionals->firstItem() + $loop->index); ?></th>
                                <td><?php echo e($internasional->nama_instansi); ?></td>
                                <td><?php echo e($internasional->ruang_lingkup); ?></td>
                                <td><?php echo e($date = empty(strtotime($internasional->jangka_waktu_awal)) ? $internasional->jangka_waktu_awal : Carbon\Carbon::parse(date('Y-m-d', strtotime($internasional->jangka_waktu_awal)))->isoFormat('D MMMM Y')); ?>

                                </td>
                                <td><?php echo e($date = empty(strtotime($internasional->jangka_waktu_akhir)) ? $internasional->jangka_waktu_akhir : Carbon\Carbon::parse(date('Y-m-d', strtotime($internasional->jangka_waktu_akhir)))->isoFormat('D MMMM Y')); ?>

                                </td>
                                <td><?php echo e($internasional->pejabat_penandatangan); ?></td>
                                <?php if($internasional->status == 'berlaku' || $internasional->status == 'Berlaku' ): ?>
                                <td style="color: green"><?php echo e($internasional->status); ?></td>
                                <?php elseif($internasional->status == 'segera berakhir'): ?>
                                <td style="color: rgb(255, 217, 0)"><?php echo e($internasional->status); ?></td>
                                <?php else: ?>
                                <td style="color: red"><?php echo e($internasional->status); ?></td>
                                <?php endif; ?>
                                <td>
                                    <a href="/home/mitra/<?php echo e($internasional->id); ?>" class="badge bg-info"><span
                                            data-feather="eye">lihat</span></a>
                                    <?php if(Auth::check()): ?>
                                    <a href="/mitra/<?php echo e($internasional->id); ?>/edit" class="badge bg-warning"><span
                                            data-feather="eye">edit</span></a>
                                    <form action="/mitra/<?php echo e($internasional->id); ?>/delete" method="POST"
                                        class="d-inline">
                                        <?php echo method_field('delete'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="badge bg-danger"
                                            onclick="return confirm('apakah anda yakin?')">Delete</button>
                                    </form>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <br>
                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination responsive pagination-sm justify-content-center">
                        <li class="page-item">
                            <?php echo e($internasionals->links()); ?>

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section><!-- End Mitra Yayasan Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/home/mitra/internasional.blade.php ENDPATH**/ ?>