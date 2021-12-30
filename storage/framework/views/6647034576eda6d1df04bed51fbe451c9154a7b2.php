

<?php $__env->startSection('title', 'Data berita'); ?>

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
                        <h6 class="h2 text-white d-inline-block mb-0">Data berita</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/berita"> berita</a></li>
                                
                                <li class="breadcrumb-item active" aria-current="page"> <?php echo e($berita->judul); ?></li>
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
                        <h3 class="mb-0">Detail berita</h3>
                    </div>
                    <?php if(session('success')): ?>
                    <div class="alert-success">
                       <p><?php echo e(session('success')); ?></p> 
                    </div>
                <?php endif; ?>
                    <!-- body card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita: <?php echo e($berita->judul); ?></h5>
                            <img src="<?php echo e(asset('storage/'. $berita->gambar )); ?>" class="img-fluid mb-3 col-sm-5 d-block" alt="...">
                            <p class="card-text"><?php echo e($berita->excerpt); ?></p>
                            <p class="card-text"><?php echo e($berita->body); ?></p>
                            <p class="card-text"><?php echo e($berita->published_at); ?></p>
                            <p class="card-text"><?php echo e($berita->created_at); ?></p>
                            <a href="/berita/<?php echo e($berita->id); ?>/edit" class="btn btn-primary">Edit</a>
                            <form action="/berita/<?php echo e($berita->id); ?>" method="POST" class="d-inline">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="/berita" class="card-link ml-5">Kembali</a>
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

<?php echo $__env->make('dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New DKPI\dkpi-uns\resources\views/berita/show.blade.php ENDPATH**/ ?>