

<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('search'); ?>
<form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" action="/pdln">
  <div class="form-group mb-0">
    <div class="input-group input-group-alternative input-group-merge">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-search"></i></span>
      </div>
      <input class="form-control" placeholder="Search" type="text" name="nama" value="<?php echo e(request('nama')); ?>">
    </div>
  </div>
  <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>
<style type="text/css">
  .pagination li{
      float: left;
      list-style-type: none;
      margin:5px;
  }
</style>
<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <!---->
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page"> Index</li>
            </ol>
          </nav>
        </div>
      </div>
         <!---->
 <!-- Card stats -->
 <div class="row">
  <div class="col-xl-3 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Data PDLN</h5>
            <span class="h2 font-weight-bold mb-0">Data PDLN</span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
              <i class="ni ni-archive-2"></i>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-0 text-sm">
          
          <a class="text-nowrap text-warning" href="/pdln">Perjalanan Dinas Luar Negeri</a>
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Data Mitra</h5>
            <span class="h2 font-weight-bold mb-0">Data Mitra</span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
              <i class="ni ni-folder-17"></i>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-0 text-sm">
          
          <a class="text-nowrap text-info" href="/mitra">Data Mitra Kerjasama UNS</a>
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Pengumuman</h5>
            <span class="h4 font-weight-bold mb-0">Pengumuman</span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-danger text-white rounded-circle shadow">
              <i class="ni ni-notification-70"></i>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-0 text-sm">
          
          <a class="text-nowrap text-danger" href="/pengumuman">Informasi Terkait DKPI</a>
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Berita</h5>
            <span class="h2 font-weight-bold mb-0">Berita</span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
              <i class="ni ni-books"></i>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-0 text-sm">
          
          <a class="text-nowrap text-orange" href="/berita">Meliputi isi Berita DKPI</a>
        </p>
      </div>
    </div>
  </div>

</div>

<!--batas atas-->

</div>
</div>
</div>
<!--batas bawah-->
<!--CARD 2-->
  <div class="container-fluid mt--6">
    <div class="row">
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Galeri</h5>
                  <span class="h2 font-weight-bold mb-0">Galeri</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                    <i class="ni ni-image"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-sm">
                
                <a class="text-nowrap text-primary" href="/gallery">Meliputi isi Galeri DKPI</a>
              </p>
            </div>
             <!-- END Card body -->
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
          <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Peringkat</h5>
                    <span class="h2 font-weight-bold mb-0">Peringkat</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow">
                      <i class="ni ni-trophy"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  
                  <a class="text-nowrap text-warning" href="/peringkat">Peringkat UNS</a>
                </p>
              </div>
               <!-- END Card body -->
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Pengaduan</h5>
                      <span class="h2 font-weight-bold mb-0">Pengaduan</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                        <i class="ni ni-send"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    
                    <a class="text-nowrap text-primary" href="/pengaduan">Berisi Pengaduan untuk DKPI</a>
                  </p>
                </div>
                 <!-- END Card body -->
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">FAQ</h5>
                        <span class="h2 font-weight-bold mb-0">FAQ</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
                          <i class="ni ni-chat-round"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                      
                      <a class="text-nowrap text-success" href="/faq">Frequently Asked Questions</a>
                    </p>
                  </div>
                   <!-- END Card body -->
              </div>
            </div>

  </div>
  </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/dashboard/index.blade.php ENDPATH**/ ?>