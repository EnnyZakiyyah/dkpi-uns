
<?php $__env->startSection('container'); ?>
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">

        <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Pengumuman</h2>
            <p>Informasi terkait Direktorat Kerjasama, pengembangan, dan Internasionalisasi dapat dilihat pada kolom berikut </p>

            
          </div>





                        <div class="card">
                            <div class="card-header" style="background-color: rgb(214, 0, 0)" >
                              <bold style="color: white">INFORMASI !!!</bold>
                            </div>
                            <?php $__currentLoopData = $pengumumans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengumuman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                            <div class="card-body">
                              <h5 class="card-title"><?php echo e($pengumuman->judul); ?></h5>
                              <p class="card-text"><?php echo e($pengumuman->pengumuman); ?></p>

                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </div>



        </div>
      </section><!-- End Team Section -->


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/home/pengumuman.blade.php ENDPATH**/ ?>