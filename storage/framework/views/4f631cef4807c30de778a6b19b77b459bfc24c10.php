
<?php $__env->startSection('container'); ?>

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs" style="background-color: #fff">
    <div class="container">

        <ol>
            <li><a href="/home/galeri">Galeri</a></li>
            <li><?php echo e($galeri->judul); ?></li>
        </ol>
        <h2 class="text-capitalize">Galeri <?php echo e($galeri->judul); ?> Details</h2>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Galeri Details Section ======= -->
<section id="portfolio-details" class="portfolio-details" style="background-color: #f3f5fa" >
    <div class="container" ata-aos="fade-up">
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper-container">
                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            <?php if($galeri->jenis == 'video'): ?>
                            <center><iframe width="650" height="370" src="<?php echo e($galeri->link); ?>"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe></center>
                            <?php else: ?>
                            <div class="portfolio-img"><img src="<?php echo e(asset('storage/'. $galeri->gambar )); ?>"
                                    class="img-fluid" alt="" <?php echo e(asset('storage/'. $galeri->gambar )); ?> width="620"
                                    height="350"></div>

                            <?php endif; ?>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info" style="background-color: rgb(248, 248, 248)">
                    <h3>Information</h3>
                    <ul>
                        <li><strong>Date</strong>: <?php echo e($galeri->created_at); ?></li>
                        <li><strong>Link</strong>: <a
                                href="https://youtu.be/YHyO-N8OkSQ">https://youtu.be/YHyO-N8OkSQ</a></li>
                    </ul>
                </div>
            </div>
                <div class="portfolio-description">
                    <h2 class="text-capitalize"><?php echo e($galeri->judul); ?></h2>
                    <?php echo $galeri->caption; ?>

                </div>
            </div>
    </div>
</section><!-- End Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/home/galeridetails.blade.php ENDPATH**/ ?>