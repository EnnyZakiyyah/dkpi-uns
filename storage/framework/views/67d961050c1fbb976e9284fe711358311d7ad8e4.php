
<?php $__env->startSection('container'); ?>

<!-- ======= PDLN Details Section ======= -->
<section id="pdln" class="portfolio">
    <div class="container" data-aos="fade-up">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="/home/pdln-mahasiswa">PDLN</a></li>
                    <li>PDLN Details</li>
                </ol>
                <h5 class="text-uppercase"><?php echo e($pdln->jenis); ?> - <?php echo e($pdln->nama); ?></h5>
                <h3 class="badge bg-info"><?php echo e($pdln->status); ?></h3>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">Nama : <?php echo e($pdln->nama); ?></h5>
                        <h6 class="card-subtitle mb-3 text-muted">Kategori : <bold class="text-uppercase"> <?php echo e($pdln->jenis); ?></bold></h6>
                        <p class="card-text">Jumlah Orang : <?php echo e($pdln->jumlah_orang); ?></p>
                        <p class="card-text">Unit Kerja : <?php echo e($pdln->unit_kerja); ?></p>
                        <p class="card-text">Tujuan : <?php echo e($pdln-> tujuan); ?></p>
                        <p class="card-text">Negara : <?php echo e($pdln->negara); ?></p>
                        <p class="card-text">Awal : <?php echo e(date('d F, Y',strtotime($pdln->jangka_waktu_awal))); ?></p>
                        <p class="card-text">Akhir : <?php echo e($pdln->jangka_waktu_akhir); ?></p>
                        <p class="card-text">Nomor Surat UNS : <?php echo e($pdln->surat_uns); ?></p>
                        <p class="card-text">Catatan UNS : <?php echo e($pdln->catatan_uns); ?></p>
                        <p class="card-text">Nomor Surat Belmawa : <?php echo e($pdln->belmawa); ?></p>
                        <p class="card-text">Catatan Belmawa : <?php echo e($pdln->catatan_belmawa); ?></p>
                        <p class="card-text">Nomor Ktln : <?php echo e($pdln->ktln_kemensetneg); ?></p>
                        <p class="card-text">Catatan Ktln : <?php echo e($pdln->catatan_setneg); ?></p>
                        <br />
                        <?php if($code == $pdln->token): ?>
                        <?php if($pdln->file_surat_uns != 'null'): ?>
                        <a href="/home/download/uns/<?php echo e($pdln->id); ?>" class="btn btn-info text-white">Download Surat UNS</a>
                        <?php endif; ?>
                        <?php if($pdln->file_belmawa != 'null'): ?>
                        <a href="/home/download/belmawa/<?php echo e($pdln->id); ?>" class="btn btn-info text-white" >Download Surat Belmawa</a>
                        <?php endif; ?>
                        <?php if($pdln->file_ktln != 'null'): ?>
                        <a href="/home/download/ktln/<?php echo e($pdln->id); ?>" class="btn btn-info text-white">Download surat ktln</a>
                        <?php endif; ?>
                        <?php else: ?>
                        <p>Download File</p>
                        <form action="token/<?php echo e($pdln->id); ?>" method="POST" class="row g-3">
                            <?php echo csrf_field(); ?>
                            <div class="col-md-3">
                                <input type="text" name='token' class="form-control" placeholder=" Input kode cth: 123456">
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary">submit</button>
                            </div>
                            <?php endif; ?>
                        </form>
                        <form class="row mt-5">
                            <div class="col-md-2">
                                <a href="/home/pdln-mahasiswa" class="btn btn-secondary">Kembali</a>
                            </div>
                            <?php if(Auth::check()): ?>
                            <div class="col-md-1 mt-2">
                                <a href="/pdln/<?php echo e($pdln->id); ?>/edit" class="btn btn-primary">Edit</a>
                            </div>
                            <div class="col-md-1 mt-2">
                                <form action="<?php echo e($pdln->id); ?>" method="POST" class="d-inline">
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('apakah anda yakin?')">Delete</button>
                                </form>
                            </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section><!-- ======= End Details PDLN Section ======= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/home/pdlndetails.blade.php ENDPATH**/ ?>