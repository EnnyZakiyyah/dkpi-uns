
<?php $__env->startSection('container'); ?>
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">
        <section id="berita" class="berita section-bg">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Berita</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>
              <div class="row">
                
               
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                
                  <div class="carousel-inner">
                   
                    <div class="carousel-item active">
                      
                      <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php $__currentLoopData = $beritas->skip(0); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col">
                          <div class="card h-100">
                            <img src="<?php echo e(asset('storage/'. $berita->gambar )); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title"><?php echo e($berita->judul); ?></h5>
                              <p class="card-text"><?php echo e($berita->excerpt); ?>

                               <left> <a href="/home/berita/beritadetails/<?php echo e($berita->id); ?>" class="btn-learn-more">Baca Selengkapnya...</a></left>
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
                
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                 
                </div>
               
                
             
            </div>

         

            </div>
          </section><!-- End Team Section -->
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/home/berita.blade.php ENDPATH**/ ?>