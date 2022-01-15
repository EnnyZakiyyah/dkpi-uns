
<?php $__env->startSection('container'); ?>

<!-- ======= Galeri Gambar Section ======= -->
<br>
<section id="layanan" class="portfolio" style="background-color: #f3f5fa">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Galeri</h2>
            <p>Berisi Video/Gambar terkait hubungan kerjasama.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <a class="filter-active" href="/home/galeri/gambar">Gambar</a>
            <a href="/home/galeri/video">Video</a>
        </ul>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-6 col-md-6 portfolio-item filter-mou">
            <div class="portfolio-img"><img src="<?php echo e(asset('storage/'. $galeri->gambar )); ?>" class="img-fluid" alt=""
                    <?php echo e(asset('storage/'. $galeri->gambar )); ?> width="620" height="350"></div>
            <div class="portfolio-info">
                <h4><?php echo e($galeri->judul); ?></h4>
                <p><?php echo $galeri->caption; ?></p>
                <a href="<?php echo e(asset('storage/'. $galeri->gambar )); ?>" data-gallery="portfolioGallery"
                    class="portfolio-lightbox preview-link" title="<?php echo e($galeri->judul); ?>"><i class="bx bx-plus"></i></a>
                <a href="/home/galeridetails/<?php echo e($galeri->id); ?>" class="details-link" title="More Details"><i
                        class="bx bx-link"></i></a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section><!-- End Section -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/home/galeri/gambar.blade.php ENDPATH**/ ?>