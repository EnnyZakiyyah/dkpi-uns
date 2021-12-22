
<?php $__env->startSection('container'); ?>
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">
    <section id="layanan" class="portfolio">
        <div class="container" data-aos="fade-up">

            <main id="main">
            
            <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <!-- ======= Breadcrumbs ======= -->
                <section id="breadcrumbs" class="breadcrumbs">
                  <div class="container">

                    <ol>
                      <li><a href="/home/berita">Berita</a></li>
                      <li>Berita Details</li>
                    </ol>
                    <h2><?php echo e($berita->judul); ?></h2>

                  </div>
                </section><!-- End Breadcrumbs -->

                <!-- ======= Portfolio Details Section ======= -->
                <section id="portfolio-details" class="portfolio-details">
                  <div class="container">

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
                        <h2><?php echo e($berita->judul); ?></h2>

                            
                            <strong>dirilis</strong>&nbsp;: <?php echo e($berita->created_at); ?><br/>
                            <strong>video</strong>&nbsp;: <a href="https://youtu.be/YHyO-N8OkSQ">https://youtu.be/YHyO-N8OkSQ</a><br/>
                            <p>
                                <?php echo $berita->body; ?>

                            </p>
                      </div>
                    </div>

                  </div>
                </section><!-- End Portfolio Details Section -->
                
              </main><!-- End #main -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
  </div>
</section><!-- End Skills Section -->
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/home/beritadetails.blade.php ENDPATH**/ ?>