
<?php $__env->startSection('container'); ?>
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">
    <section id="layanan" class="portfolio"  style="background-color: #f3f5fa">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Galeri</h2>
              <p>Berisi Video/Gambar terkait hubungan kerjasama.</p>
              
            </div>
      
            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <a href="/home/galeri/gambar">Gambar</a>
              <a class="filter-active" href="/home/galeri/video">Video</a>
              </ul>
              <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <!-- CV/PT -->
              <div class="col-lg-6 col-md-6 portfolio-item filter-mou">
                <div class="portfolio-img"><iframe width="620" height="350" src="<?php echo e($galeri->link); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                
                <div class="portfolio-info">
                  <h4><?php echo e($galeri->judul); ?></h4>
                  <p><?php echo $galeri->caption; ?></p>
                  <a href="<?php echo e($galeri->link); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php echo e($galeri->judul); ?>"><i class="bx bx-plus"></i></a>
                  <a href="/home/galeridetails/<?php echo e($galeri->id); ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


  </div>
</section><!-- End Skills Section -->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dkpi-uns\resources\views/home/galeri/video.blade.php ENDPATH**/ ?>