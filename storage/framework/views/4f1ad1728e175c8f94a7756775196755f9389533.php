

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('container'); ?>
  <!-- Header -->
  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">peringkat</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="/peringkat"> peringkat</a></li>
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
            <h3 class="mb-0">THES</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="no">peringkat</th>
                  <th scope="col" class="sort" data-sort="nim">Judul</th>
                  <th scope="col" class="sort" data-sort="nama">link</th>
                  <th scope="col" class="sort" data-sort="nama">action</th>
                </tr>
              </thead>
              <tbody class="list">
                <?php $__currentLoopData = $thes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peringkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th scope="row"><?php echo e($peringkat->peringkat); ?></th>
                  <td><?php echo e($peringkat->judul); ?></td>
                  <td><?php echo e($peringkat->link); ?></td>
                  <td>
                    <a href="/peringkat/<?php echo e($peringkat->id); ?>/edit" class="badge badge-info">Detail</a>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div >

</div>
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col">
        <div class="card">
  <div class="card-header border-0">
    <h3 class="mb-0">QS Star</h3>
  </div>
  <!-- Light table -->
  <div class="table-responsive">
    
    <table class="table align-items-center table-flush">
      <thead class="thead-light">
        <tr>
          <th scope="col" class="sort" data-sort="no">peringkat</th>
          <th scope="col" class="sort" data-sort="nim">Judul</th>
          <th scope="col" class="sort" data-sort="nama">link</th>
          <th scope="col" class="sort" data-sort="nama">action</th>
        </tr>
      </thead>
      <tbody class="list">
        <?php $__currentLoopData = $qs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peringkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <th scope="row"><?php echo e($peringkat->peringkat); ?></th>
          <td><?php echo e($peringkat->judul); ?></td>
          <td><?php echo e($peringkat->link); ?></td>
          <td>
            <a href="/peringkat/<?php echo e($peringkat->id); ?>" class="badge badge-info">Detail</a>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
</div>
  <!-- End Main content -->
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/peringkat/index.blade.php ENDPATH**/ ?>