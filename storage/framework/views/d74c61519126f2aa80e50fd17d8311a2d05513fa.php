<?php $__env->startSection('container'); ?>
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">
    <section id="layanan" class="portfolio">
        <div class="container" data-aos="fade-up">

            <main id="main">

                <!-- ======= Breadcrumbs ======= -->
                <section id="breadcrumbs" class="breadcrumbs">
                  <div class="container">

                    <ol>
                      <li><a href="/home/galeri">Galeri</a></li>
                      <li>Galeri Details</li>
                    </ol>
                    <h2><?php echo e($galeri->judul); ?></h2>

                  </div>
                </section><!-- End Breadcrumbs -->

                <!-- ======= Portfolio Details Section ======= -->
                <section id="portfolio-details" class="portfolio-details">
                  <div class="container">

                    <div class="row gy-4">

                      <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper-container">
                          <div class="swiper-wrapper align-items-center">

                            <div >
                                <center><iframe width="560" height="315" src="<?php echo e($galeri->link); ?>" title="<?php echo e($galeri->judul); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
                            </div>

                          </div>
                          <div class="swiper-pagination"></div>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="portfolio-info">
                          <h3><?php echo e($galeri->judul); ?></h3>
                          <ul>
                            <li><strong>Project date</strong>: <?php echo e($galeri->created_at); ?></li>
                            
                          </ul>
                        </div>
                        <div class="portfolio-description">
                        <?php echo $galeri->caption; ?>

                        </div>
                      </div>

                    </div>

                  </div>
                </section><!-- End Portfolio Details Section -->

              </main><!-- End #main -->

        </div>
  </div>
</section><!-- End Skills Section -->
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dkpi-uns\resources\views/home/galeridetails.blade.php ENDPATH**/ ?>