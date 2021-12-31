

<?php $__env->startSection('title', 'Data galeri'); ?>

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
                        <h6 class="h2 text-white d-inline-block mb-0">Data Galeri</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/gallery"> Galeri</a></li>
                                
                                <li class="breadcrumb-item active" aria-current="page"> <?php echo e($gallery->judul); ?></li>
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
                        <h3 class="mb-0">Detail Galeri</h3>
                    </div>
                    <?php if(session('success')): ?>
                    <div class="alert-success">
                       <p><?php echo e(session('success')); ?></p>
                    </div>
                <?php endif; ?>
                    <!-- body card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Judul : <?php echo e($gallery->judul); ?></h5>
                            <h6 class="card-subtitle mb-3 text-muted">Kategori : <?php echo e($gallery->jenis); ?></h6>
                            <p class="card-text"><img src="<?php echo e(asset('storage/'. $gallery->gambar )); ?>" class="img-fluid mb-3 col-sm-5 d-block" alt="..."></p>
                            <iframe  width="650" height="370" src="<?php echo e($gallery->link); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br/><br/>
                            <p class="card-text">Caption : <?php echo $gallery->caption; ?></p>
                            <p class="card-text">Tgl Dibuat : <?php echo e($gallery->created_at); ?></p>
                            <a href="/gallery/<?php echo e($gallery->id); ?>/edit" class="btn btn-primary">Edit</a>
                            <form action="/gallery/<?php echo e($gallery->id); ?>" method="POST" class="d-inline">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
                            </form>
                            <a href="/gallery" class="card-link ml-5">Kembali</a>
                        </div>
                    </div>

                   
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

<?php echo $__env->make('dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dkpi-uns\resources\views/gallery/show.blade.php ENDPATH**/ ?>