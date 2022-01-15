
<?php $__env->startSection('container'); ?>

<br>
<section id="berita" class="berita section-bg">
  <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>Berita</h2>
          <p>Berisi informasi berupa berita terkait hubungan kerjasama.</p>
      </div>
      <div class="row">
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="row row-cols-1 row-cols-md-3 g-4">
                      <?php $__currentLoopData = $beritas->skip(0); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="col">
                          <div class="card h-100">
                              <img src="<?php echo e(asset('storage/'. $berita->gambar )); ?>" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <h5 class="card-title"><?php echo e($berita->judul); ?></h5>
                                  <p class="card-text"><?php echo $berita->excerpt; ?>

                                      <left> <a href="/home/berita/beritadetails/<?php echo e($berita->id); ?>"
                                              class="btn-learn-more">Baca Selengkapnya...</a></left>
                                  </p>
                              </div>
                              <div class="card-footer">
                                  <small class="text-muted"><?php echo e($berita->created_at->diffForHumans()); ?></small>
                              </div>
                          </div>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section><!-- End Team Section -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/home/berita.blade.php ENDPATH**/ ?>