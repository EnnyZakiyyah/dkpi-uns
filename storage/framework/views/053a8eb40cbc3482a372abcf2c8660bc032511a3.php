
<?php $__env->startSection('container'); ?>
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">
   <!-- ======= Frequently Asked Questions Section ======= -->
   <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Frequently Asked Questions</h2>
        
      </div>

      <div class="faq-list">
        <ul>
         
            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            
          <li data-aos="fade-up" data-aos-delay="100">
        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-<?php echo e($loop->iteration); ?>"><?php echo $faq->pertanyaan; ?><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-<?php echo e($loop->iteration); ?>" class="collapse show" data-bs-parent=".faq-list">
              <p><?php echo e($faq->jawaban); ?></p>
              <a href="<?php echo e($faq->link); ?>">selengkapnya</a>
            </div>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>
      </div>

    </div>
    </section><!-- End Frequently Asked Questions Section -->
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dkpi-uns\resources\views/home/faq.blade.php ENDPATH**/ ?>