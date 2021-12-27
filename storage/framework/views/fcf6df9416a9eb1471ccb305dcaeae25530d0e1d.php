
<?php $__env->startSection('container'); ?>
<!-- ======= Hero Section ======= -->
<div class="box">
      <!-- ======= Portfolio Section ======= -->
      <section id="pdln" class="portfolio"  style="background-color: #f3f5fa">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Peringkat UNS</h2>
            <p>dari tahun ke tahun, UNS terus meningkatkan mutu dan layanan </p>
          </div>

                  
  <div class="container">
    <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                      <li data-filter=".filter-thes">THES</li>
                      <li data-filter=".filter-qs">QS Star</li>

    </ul> </div>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <!-- CV/PT -->
              <div class="portfolio-item filter-thes">
                <div class="card">
                  <img src="<?php echo e(asset('assets/img/cta-bg.jpg')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="portfolio-description">
                          <?php $__currentLoopData = $thess; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                        <h2><?php echo e($thes->judul); ?></h2>

                            <strong>Kategori</strong>&nbsp;:<?php echo e($thes->jenis); ?><br/>
                            <strong>Peringkat</strong>&nbsp;: <?php echo e($thes->peringkat); ?><br/>
                            <strong>dimuat</strong>&nbsp;: <?php echo e($thes->created_at); ?><br/>
                            
                            <p>
                                <?php echo $thes->berita; ?>

                              </p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
                    </p>
                  </div>
                </div>
              </div>
          </div>


              <div class="portfolio-item filter-qs">

                <div class="portfolio-item filter-qs">
                  <div class="card">
                    <img src="<?php echo e(asset('assets/img/cta-bg.jpg')); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">
                        <div class="portfolio-description">
                            <?php $__currentLoopData = $qss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                            <h2><?php echo e($qs->judul); ?></h2>

                                <strong>Kategori</strong>&nbsp;:<?php echo e($qs->jenis); ?><br/>
                                <strong>Peringkat</strong>&nbsp;: <?php echo e($qs->peringkat); ?><br/>
                                <strong>Dimuat</strong>&nbsp;: <?php echo e($qs->created_at); ?><br/>
                                
                                <p>
                                    <?php echo $qs->berita; ?>

                                  </p>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                      </p>
                    </div>
                  </div>

                  </div>


              </div>


        </div>
      </section><!-- End Portfolio Section -->


      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dkpi-uns\resources\views/home/peringkat.blade.php ENDPATH**/ ?>