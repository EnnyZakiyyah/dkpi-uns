
<?php $__env->startSection('container'); ?>

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

      <div class="section-title">
          <h2>Frequently Asked Questions</h2></a>
      </div>

      <div class="faq-list">
          <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <ul>
              <li data-aos="fade-up" data-aos-delay="<?php echo e($i = $loop->iteration); ?>00">
                  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                      class="collapse text-capitalize" data-bs-target="#faq-list-<?php echo e($i); ?>"><?php echo e($faq->pertanyaan); ?> <i
                          class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-<?php echo e($i); ?>" class="collapse show" data-bs-parent=".faq-list">
                      <p><?php echo $faq->jawaban; ?></p>
                      <a href="<?php echo e($faq->link); ?>">Selengkapnya</a>
                  </div>
              </li>
          </ul>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>

  </div>
</section><!-- End Frequently Asked Questions Section -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/home/faq.blade.php ENDPATH**/ ?>