
<?php $__env->startSection('container'); ?>

<!-- ======= QStar Section ======= -->
<br>
<section id="portfolio" class="portfolio"  style="background-color: #f3f5fa" >
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Peringkat UNS</h2>
            <p>dari tahun ke tahun, UNS terus meningkatkan mutu dan layanan </p>
        </div>
        <div class="container">
            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <a href="/home/thes">THES</a>
                <a class="filter-active" href="/home/qstar">QStar</a>

            </ul>
        </div>

        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper-container">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('assets/img/Qstar.jpeg')); ?>" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('assets/img/Qstar.jpeg')); ?>" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('assets/img/Qstar.jpeg')); ?>" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info" style="background-color: rgb(248, 248, 248)">
                            <h3>Information</h3>
                            <?php $__currentLoopData = $qss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <h2 class="text-capitalize"><?php echo e($qs->judul); ?></h2>
                            <ul>
                                <li><strong>Kategori</strong>&nbsp;:&nbsp;<?php echo e($qs->jenis); ?></li>
                                <li><strong>Peringkat</strong>&nbsp;:&nbsp; <?php echo e($qs->peringkat); ?></li>
                                <li><strong>Update</strong>&nbsp;:&nbsp; <?php echo e($qs->updated_at); ?></li>
                                <li><strong>Sumber</strong>&nbsp;:&nbsp; <a href="<?php echo e($qs->link); ?>"><?php echo e($qs->link); ?></a>
                                </li>
                            </ul>
                        </div>
                      </div>
                        <div class="portfolio-description">
                            <h2 class="text-capitalize"><?php echo e($qs->judul); ?></h2>
                            <p><?php echo $qs->berita; ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </section><!-- End Details Section -->
    </div>
</section><!-- End Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/home/peringkat/qstar.blade.php ENDPATH**/ ?>