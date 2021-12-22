<<<<<<< Updated upstream
<?php $__env->startSection('title', 'Data Mitra'); ?>
=======


<?php $__env->startSection('title', 'Dara Mitra'); ?>
>>>>>>> Stashed changes

<?php $__env->startSection('container'); ?>
  <!-- Header -->
  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Data Mitra</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="/mitra"> mitra</a></li>
                <li class="breadcrumb-item active" aria-current="page"> index</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="/mitra/create" class="btn btn-sm btn-neutral">New</a>
            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
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
            <h3 class="mb-0">Data Mitra</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
<<<<<<< Updated upstream
              <a href="<?php echo e('/mitra/create'); ?>" class="btn btn-primary">Tambah Data</a>
=======
>>>>>>> Stashed changes
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="no">No</th>
                  <th scope="col" class="sort" data-sort="nim">Nama</th>
                  <th scope="col" class="sort" data-sort="nama">instansi</th>
                  <th scope="col" class="sort" data-sort="nama">MoU UNS</th>
                  <th scope="col" class="sort" data-sort="nama">MoU Mitra</th>
                  
                  <th scope="col" class="sort" data-sort="namaruang">pejabat</th>
                  <th scope="col" class="sort" data-sort="aksi">Aksi</th>
                </tr>
              </thead>
              <tbody class="list">
                <?php $__currentLoopData = $mitras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mitra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th scope="row"><?php echo e($loop->iteration); ?></th>
                  <td><a href="/mitra/<?php echo e($mitra->id); ?>"><?php echo e($mitra->nama_instansi); ?></a></td>
                  <td><a href="/data/<?php echo e($mitra->instansi); ?>"><?php echo e($mitra->instansi); ?></a></td>
                  <td><?php echo e($mitra->no_mou_uns); ?></td>
                  <td><?php echo e($mitra->no_mou_mitra); ?></td>
                  
                  <td><?php echo e($mitra->pejabat_penandatangan); ?></td>

                  <td>
                    <a href="/mitra/<?php echo e($mitra->id); ?>" class="badge badge-info">Detail</a>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
          <!-- Card footer -->
          <div class="card-footer py-4">
            <nav aria-label="...">
              <a href="<?php echo e('/mitra/create'); ?>" class="btn btn-primary">Tambah Data</a>
              <ul class="pagination justify-content-end mb-0">
<<<<<<< Updated upstream
                
                <?php echo e($mitras->links()); ?>

=======
                <li class="page-item">
                  <?php echo e($mitras->links()); ?>

                </li>
>>>>>>> Stashed changes
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Main content -->
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dkpi-uns\resources\views/mitra/index.blade.php ENDPATH**/ ?>