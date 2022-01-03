
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
                            <h5 class="card-header">INFORMASI !!! </h5>
                            
                            <div class="card-body">
                              <h5 class="card-title"><?php echo e($pengumuman->judul); ?></h5>
                              <p class="card-text"><?php echo e($pengumuman->pengumuman); ?></p>
                              
                                <?php if($pengumuman->link != 'null'): ?>
                                <a class="btn btn-primary" type="button" href="/download-pengumuman/<?php echo e($pengumuman->id); ?>"><i class="bi bi-download">&nbsp; Download File</i></a>
                              <?php else: ?>
                              <a href="<?php echo e($pengumuman->link); ?>"><?php echo e($pengumuman->link); ?></a>
                              <?php endif; ?>
                            </div>
                            <!-- garis -->
              
                          </div>



        </div>
      </section><!-- End Team Section -->


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/home/pengumumandetails.blade.php ENDPATH**/ ?>