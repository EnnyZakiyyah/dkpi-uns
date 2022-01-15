

<?php $__env->startSection('title', 'Database pdln'); ?>

<?php $__env->startSection('container'); ?>

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
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Detail PDLN</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/pdln"> PDLN</a></li>
                                <li class="breadcrumb-item"><a href="/data/<?php echo e($pdln->jenis); ?>"> <?php echo e($pdln->jenis); ?></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo e($pdln->nama); ?></li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <?php
    use Carbon\Carbon;
    $today_date = Carbon::today()->isoFormat('D MMMM Y');
    ?>
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Detail Data Pdln</h3>
                        <h4 class="badge badge-info"><?php echo e($pdln->status); ?></h4>
                    </div>

                    <!-- body card -->
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
                            <div class="row">
                                <div class="col-md mt-2">
                            <?php if($pdln->file_surat_uns != 'null'): ?>
                            <a href="download/uns/<?php echo e($pdln->id); ?>" class="btn btn-warning">Download surat UNS</a>
                            <?php endif; ?></div>
                            <div class="col-md mt-2">
                            <?php if($pdln->file_belmawa != 'null'): ?>
                            <a href="download/belmawa/<?php echo e($pdln->id); ?>" class="btn btn-warning">Download surat
                                belmawa</a>
                            <?php endif; ?></div>
                            <div class="col-md mt-2">
                            <?php if($pdln->file_ktln != 'null'): ?>
                            <a href="download/ktln/<?php echo e($pdln->id); ?>" class="btn btn-warning">Download surat ktln</a>
                            <?php endif; ?></div>
                        </div>
                        <br>
                            <a href="<?php echo e($pdln->id); ?>/edit" class="btn btn-primary">Edit</a>
                            <form action="<?php echo e($pdln->id); ?>" method="POST" class="d-inline">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('apakah anda yakin?')">Delete</button>
                            </form>
                            <a href="/pdln" class="card-link ml-5">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/pdln/show.blade.php ENDPATH**/ ?>