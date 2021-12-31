

<?php $__env->startSection('title', 'Database mitra'); ?>

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
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Mitra</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/mitra"> Mitra</a></li>
                                <li class="breadcrumb-item"><a href="/mitra/data/<?php echo e($mitra->instansi); ?>"><?php echo e($mitra->instansi); ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"> <?php echo e($mitra->nama_instansi); ?></li>
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
                        <h3 class="mb-0">Detail Mitra</h3><h4 class="badge badge-info"><?php echo e($mitra->status); ?></h4>
                    </div>

                    <!-- body card -->
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
                            <a href="download/mou/<?php echo e($mitra->id); ?>" class="btn btn-warning">Download File MoU</a>
                            <a href="<?php echo e($mitra->id); ?>/edit" class="btn btn-primary">Edit</a>
                            <form action="<?php echo e($mitra->id); ?>" method="POST" class="d-inline">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
                            </form>
                            <a href="/mitra" class="card-link ml-5">Kembali</a>
                        </div>
                    </div>

                    <!-- Card footer -->
                    
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main content -->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dkpi-uns\resources\views/mitra/show.blade.php ENDPATH**/ ?>