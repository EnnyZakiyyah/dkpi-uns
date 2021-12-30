<?php $__env->startSection('title', 'Galeri'); ?>

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
                <li class="breadcrumb-item"><a href="/Gallery">Galeri</a></li>
                <li class="breadcrumb-item active" aria-current="page">Index</li>
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
              <h5 class="card-title text-uppercase text-muted mb-0">Galeri</h5>
              <span class="h2 font-weight-bold mb-0">Galeri</span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                <i class="ni ni-archive-2"></i>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0 text-sm">
            
            <a class="text-nowrap text-warning" href="/gallery/create">tambahkan video</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-0">
            <h3 class="mb-0">Galeri</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="no">No</th>
                  <th scope="col" class="sort" data-sort="nim">Judul</th>
                  <th scope="col" class="sort" data-sort="nama">Caption</th>
                  <th scope="col" class="sort" data-sort="nama">Aksi</th>
                </tr>
              </thead>
              <tbody class="list">
                <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th scope="row"><?php echo e($loop->iteration); ?></th>
                  <td><?php echo e($galeri->judul); ?></td>
                  <td><iframe width="350" height="150" src="<?php echo e($galeri->link); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                  <td><?php echo $galeri->caption; ?></td>
                  <td>
                    <a href="/gallery/<?php echo e($galeri->id); ?>" class="badge badge-info">Detail</a>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
          <!-- Card footer -->
          <div class="card-footer py-4">
            <nav aria-label="...">
              <a href="<?php echo e('/gallery/create'); ?>" class="btn btn-primary">Tambah Data</a>
              <ul class="pagination justify-content-end mb-0">
                <li class="page-item">
                  <?php echo e($galleries->links()); ?>

                </li>
              </ul>
            </nav>
          </div>
        </div>
    </div>
</div>
</div>


    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dkpi-uns\resources\views/gallery/index.blade.php ENDPATH**/ ?>