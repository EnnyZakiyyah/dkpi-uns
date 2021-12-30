
<?php $__env->startSection('container'); ?>
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">
        <section id="layanan" class="portfolio">
            <div class="container" data-aos="fade-up">

                <main id="main">
                

                    <!-- ======= Breadcrumbs ======= -->
                    <section id="breadcrumbs" class="breadcrumbs">
                      <div class="container">

                        <ol>
                          <li><a href="/home/mitra">Mitra</a></li>
                          <li>Mitra Details</li>
                        </ol>
                        <h2><?php echo e($pdln->instansi); ?></h2>
                        <h2><?php echo e($pdln->nama_instansi); ?></h2>

                      </div>
                    </section><!-- End Breadcrumbs -->

                    <!-- ======= Portfolio Details Section ======= -->
                    <section id="portfolio-details" class="portfolio-details">
                      <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Nama : <?php echo e($pdln->nama); ?></h5>
                            <h6 class="card-subtitle mb-3 text-muted">Kategori : <?php echo e($pdln->jenis); ?></h6>
                            <p class="card-text">Jumlah Orang : <?php echo e($pdln->jumlah_orang); ?></p>
                            <p class="card-text">Unit Kerja : <?php echo e($pdln->unit_kerja); ?></p>
                            <p class="card-text">Tujuan : <?php echo e($pdln->tujuan); ?></p>
                            <p class="card-text">Negara : <?php echo e($pdln->negara); ?></p>
                            <p class="card-text">Awal : <?php echo e(date('d F, Y',strtotime($pdln->jangka_waktu_awal))); ?></p>
                            <p class="card-text">Akhir : <?php echo e($pdln->jangka_waktu_akhir); ?></p>
                            <p class="card-text">Nomor Surat UNS :<?php echo e($pdln->surat_uns); ?></p>
                            <p class="card-text">Catatan UNS : <?php echo e($pdln->catatan_uns); ?></p>
                            <p class="card-text">Nomor Surat Belmawa : <?php echo e($pdln->belmawa); ?></p>
                            <p class="card-text">Catatan Belmawa : <?php echo e($pdln->catatan_belmawa); ?></p>
                            <p class="card-text">Nomor Ktln : <?php echo e($pdln->ktln_kemensetneg); ?></p>
                            <p class="card-text">Catatan Ktln : <?php echo e($pdln->catatan_setneg); ?></p>
                                <?php if(Auth::check()): ?>
                                <a href="<?php echo e($pdln->id); ?>/edit" class="btn btn-primary">Edit</a>
                                <form action="<?php echo e($pdln->id); ?>" method="POST" class="d-inline">
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
                                </form>
                                <?php endif; ?>
                                <a href="/home/pdln" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
            </div>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/home/pdlndetails.blade.php ENDPATH**/ ?>