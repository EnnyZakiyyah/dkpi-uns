<nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?php echo e(($title === "DKPI") ? 'active' : ''); ?>  " href="/">Home</a></li>
          <li><a class="nav-link scrollto <?php echo e(($title === "Layanan") ? 'active' : ''); ?> " href="/home/layanan">Layanan</a></li>
          <li><a class="nav-link scrollto <?php echo e(($title === "Data PDLN") ? 'active' : ''); ?>" href="/home/pdln">Data PDLN</a></li>
          <li><a class="nav-link  scrollto <?php echo e(($title === "Data Mitra") ? 'active' : ''); ?> " href="/home/mitra">Mitra</a></li>
          <li><a class="nav-link  scrollto <?php echo e(($title === "FAQ") ? 'active' : ''); ?> " href="/home/faq">FAQ</a></li>
          <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down <?php echo e(($title === "Informasi") ? 'active' : ''); ?>"></i></a>
            <ul>
              <li><a href="/home/berita">Berita</a></li>
              <li><a href="/home/galeri">Galeri</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto <?php echo e(($title === "Peringkat") ? 'active' : ''); ?>" href="/home/peringkat">Peringkat</a></li>
          <li><a class="nav-link scrollto <?php echo e(($title === "Pengumuman") ? 'active' : ''); ?>" href="/home/pengumuman">Pengumuman</a></li>
          <li><a class="bi bi-box-arrow-in-right" href="/login"></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
<?php /**PATH C:\xampp\htdocs\New DKPI\dkpi-uns\resources\views/partials/navbar.blade.php ENDPATH**/ ?>