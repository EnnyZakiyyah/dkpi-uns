
<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">

      

        <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Direktorat Kerjasama, Pengembangan dan Internasionalisasi</h1>
          <h2>Universitas Sebelas Maret</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://youtu.be/QvqNUeE7A74" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            
           
            <div class="carousel-inner">
              
                
                
                <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="carousel-item">
                <img src="<?php echo e(asset('storage/'. $header->gambar )); ?>" class="d-block w-100" alt="...">
              </div>
        
              
           
      
            
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
       
      </div>

    </div>
  </div>
    </section><!-- End Cliens Section -->
<?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/home/header.blade.php ENDPATH**/ ?>