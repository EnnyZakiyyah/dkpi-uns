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
                        <h2><?php echo e($mitra->instansi); ?></h2>
                        <h2><?php echo e($mitra->nama_instansi); ?></h2>
                        <h3 class="badge bg-info"><?php echo e($mitra->status); ?></h3>

                      </div>
                    </section><!-- End Breadcrumbs -->

                    <!-- ======= Portfolio Details Section ======= -->
                    <section id="portfolio-details" class="portfolio-details">
                      <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Nama instansi: <?php echo e($mitra->nama_instansi); ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"> jenis Instansi: <?php echo e($mitra->instansi); ?></h6>
                                <p class="card-text">Nomor MoU UNS: <?php echo e($mitra->no_mou_uns); ?></p>
                                <p class="card-text">Nomor MoU Mitra: <?php echo e($mitra->no_mou_mitra); ?></p>
                                <p class="card-text">Ruang Lingkup: <?php echo e($mitra->ruang_lingkup); ?></p>
                                <p class="card-text">Awal Masa Berlaku: <?php echo e($mitra->jangka_waktu_awal); ?></p>
                                <p class="card-text">Akhir Masa Berlaku: <?php echo e($mitra->jangka_waktu_akhir); ?></p>
                                <p class="card-text">Pejabat Penandatangan: <?php echo e($mitra->pejabat_penandatangan); ?></p>
                                <br/>
                                <p>download file</p>
                                <form action="token/<?php echo e($mitra->id); ?>" method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <input type="text" name='token' placeholder="input kode cth: 123456">
                                    <button type="submit" class="btn btn-primary">submit</button>
                                </form>
                                <?php if(Auth::check()): ?>
                                <a href="/mitra/<?php echo e($mitra->id); ?>/edit" class="btn btn-primary">Edit</a>
                                <form action="mitra/<?php echo e($mitra->id); ?>" method="POST" class="d-inline">
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
                                </form>
                                <?php endif; ?>
                                <a href="/home/mitra-cv" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
            </div>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dkpi-uns\resources\views/home/mitradetails.blade.php ENDPATH**/ ?>