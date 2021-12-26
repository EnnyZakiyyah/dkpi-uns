<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <!-- Favicon -->
  <link href="<?php echo e(asset('/images/fav.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('/images/uns-touch-icon.png')); ?>" rel="apple-touch-icon">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo e(asset('assets2/vendor/nucleo/css/nucleo.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo e(asset('assets2/vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>" type="text/css">
  <!-- Page plugins -->
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('assets2/css/argon.css?v=1.2.0')); ?>" type="text/css">

  <link rel="stylesheet" type="text/css" href="/css/trix.css">
  <script type="text/javascript" src="/js/trix.js"></script>

  <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
</head>

<body>

  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
              <img src="<?php echo e(asset('/images/Logo-UNS-New-04.png')); ?>" class="navbar-brand-img"  alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(url('/dashboard')); ?>">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(url('/pdln')); ?>">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Data PDLN</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(url('/mitra')); ?>">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Data mitra</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(url('/pengumuman')); ?>">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">pengumuman</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(url('/berita')); ?>">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">berita</span>
                        </a>
                    </li>
                    <li class="nav-item">
<<<<<<< Updated upstream
                        <a class="nav-link active" href="<?php echo e(url('/galeri')); ?>">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">galeri</span>
=======
                        <a class="nav-link <?php echo e(($title === "Galeri") ? 'active' : ''); ?>" href="<?php echo e(url('/gallery')); ?>">
                            <i class="ni ni-image text-primary"></i>
                            <span class="nav-link-text">Galeri</span>
>>>>>>> Stashed changes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(url('/peringkat')); ?>">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">peringkat</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(url('/pengaduan')); ?>">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">pengaduan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(url('/faq')); ?>">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">FAQ</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(url('/register')); ?>">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Register account</span>
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
<<<<<<< Updated upstream
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Documentation</span>
                </h6>
=======

>>>>>>> Stashed changes
            </div>
        </div>
    </div>
</nav>
  <!-- Main content -->
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
<<<<<<< Updated upstream
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->

                        <!-- Avatar -->
                        
                      </div>

                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
=======


>>>>>>> Stashed changes
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
<<<<<<< Updated upstream

                  <div class="media-body  ml-2  d-none d-lg-block">
=======
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <img alt="Image placeholder" src="<?php echo e(asset('assets/img/avatar3.png')); ?>" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                        </div>

                      </div>
                    </div>
                  </div>
                  
          
        
      
    </nav>
   <?php echo $__env->yieldContent('container'); ?>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
    <script src="<?php echo e(asset('assets2/vendor/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets2/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets2/vendor/js-cookie/js.cookie.js')); ?>"></script>
    <script src="<?php echo e(asset('assets2/vendor/jquery.scrollbar/jquery.scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets2/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')); ?>"></script>
    <!-- Optional JS -->
    <script src="<?php echo e(asset('assets2/vendor/chart.js/dist/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets2/vendor/chart.js/dist/Chart.extension.js')); ?>"></script>
    <!-- Argon JS -->
    <script src="<?php echo e(asset('assets2/js/argon.js?v=1.2.0')); ?>"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\dkpi-uns\resources\views/dashboard/layouts/main.blade.php ENDPATH**/ ?>