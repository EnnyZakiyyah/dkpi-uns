

<?php $__env->startSection('title', 'Galeri'); ?>

<?php $__env->startSection('container'); ?>
<style type="text/css">
    .pagination li{
        float: left;
        list-style-type: none;
        margin:5px;
    }
  </style>
  <!-- Header -->
  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <!---->
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="/Gallery">Galeri</a></li>
                <li class="breadcrumb-item active" aria-current="page">Index</li>
              </ol>
            </nav>
          </div>
        </div>
           <!---->
   <!-- Card stats -->
   <div class="row">
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0">Galeri</h5>
              <span class="h2 font-weight-bold mb-0">Galeri</span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                <i class="ni ni-archive-2"></i>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0 text-sm">
            
            <a class="text-nowrap text-warning" href="/gallery/create">tambahkan video</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <!-- CV/PT -->
        <div class="col-lg-6 col-md-6 portfolio-item filter-mou">
          <div class="portfolio-img"><iframe width="230" height="120" src="<?php echo e($galeri->link); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
          <div class="portfolio-info">
            <h4><?php echo e($galeri->judul); ?></h4>
            <a href="/gallery/<?php echo e($galeri->id); ?>/edit" class="badge badge-info">Detail</a>
            
            <a href="<?php echo e($galeri->link); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php echo e($galeri->judul); ?>"><i class="bx bx-plus"></i></a>
            <a href="/galeri/<?php echo e($galeri->id); ?>/edit" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
    </div>
</div>
</div>


        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dkpi-uns\resources\views/gallery/index.blade.php ENDPATH**/ ?>