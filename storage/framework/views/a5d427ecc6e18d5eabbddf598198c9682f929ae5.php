

<?php $__env->startSection('title', 'Galeri'); ?>
<?php $__env->startSection('search'); ?>
<form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" action="/faq">
  <div class="form-group mb-0">
    <div class="input-group input-group-alternative input-group-merge">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-search"></i></span>
      </div>
      <input class="form-control" placeholder="Search" type="text" name="pertanyaan" value="<?php echo e(request('pertanyaan')); ?>">
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
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Galeri</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="/Gallery">Galeri</a></li>
                <li class="breadcrumb-item active" aria-current="page"> index</li>
              </ol>
            </nav>
          </div>
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
                    <a href="/gallery/<?php echo e($galeri->id); ?>/edit" class="badge badge-info">Detail</a>
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
  <!-- End Main content -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New DKPI\dkpi-uns\resources\views/gallery/index.blade.php ENDPATH**/ ?>