
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
                                <a href="<?php echo e($pengumuman->link); ?>"><?php echo e($pengumuman->link); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 
                                <?php endif; ?>
                                  <?php if($pengumuman->file_download != 'null'): ?>
                                  <a href="/download-pengumuman/<?php echo e($pengumuman->id); ?>">Download File&nbsp;<?php echo e($pengumuman->id); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                  <?php endif; ?>
                                  <a href="/home/pengumuman" class="btn btn-secondary">Kembali</a>
                            </div>
                            <!-- garis -->
              
                          </div>


        </div>
      </section><!-- End Team Section -->


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/home/pengumumandetails.blade.php ENDPATH**/ ?>