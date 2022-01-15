
<?php $__env->startSection('container'); ?>
<?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs" style="background-color: #fff">
    <div class="container">

        <ol>
            <li><a href="/home/berita">Berita</a></li>
            <li>Berita Details</li>
        </ol>
        <h2 class="text-capitalize">Berita <?php echo e($berita->judul); ?> Details</h2>

    </div>
</section><!-- End Breadcrumbs -->

<section id="portfolio-details" class="portfolio-details" style="background-color: #f3f5fa">
    <div class="container" data-aos="fade-up">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="portfolio-details-slider swiper-container">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="<?php echo e(asset('storage/'. $berita->gambar )); ?>" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="portfolio-description">
                <h2 class="text-capitalize"><?php echo e($berita->judul); ?></h2>
                <strong>Di Update</strong>&nbsp;: <?php echo e($berita->created_at); ?><br />
                <p>
                    <?php echo $berita->body; ?>

                </p>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section><!-- End Section -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/home/beritadetails.blade.php ENDPATH**/ ?>