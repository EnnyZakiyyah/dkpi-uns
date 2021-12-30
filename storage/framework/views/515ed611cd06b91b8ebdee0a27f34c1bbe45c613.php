

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
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Data PDLN</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="/pdln"> PDLN</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Index</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="/pdln/create" class="btn btn-sm btn-neutral">New</a>
            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <?php
        // use Carbon\Carbon;
        // $today_date = Carbon::today()->isoFormat('D MMMM Y');
        // $today = Carbon::now()->isoFormat('D MMMM Y');
        // setlocale(LC_TIME, 'id_ID');
    ?>
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-0">
            <h3 class="mb-0">Data PDLN</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="no">No</th>
                  <th scope="col" class="sort" data-sort="nim">Nama</th>
                  <th scope="col" class="sort" data-sort="nama">kategori</th>
                  
                  <th scope="col" class="sort" data-sort="nama">unit</th>
                  
                  <th scope="col" class="sort" data-sort="nama">Negara</th>
                  <th scope="col" class="sort" data-sort="tanggalpengembalian">awal</th>
                  <th scope="col" class="sort" data-sort="tanggalpengembalian">akhir</th>
                  <th scope="col" class="sort" data-sort="aksi">Aksi</th>
                </tr>
              </thead>
              <tbody class="list">
                <?php $__currentLoopData = $pdlns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pdln): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th scope="row"><?php echo e($loop->iteration); ?></th>
                  <td><a href="/pdln/<?php echo e($pdln->id); ?>"><?php echo e($pdln->nama); ?></a></td>
                  <td><a href="/data/<?php echo e($pdln->jenis); ?>"><?php echo e($pdln->jenis); ?></a></td>
                  
                  <td><?php echo e($pdln->unit_kerja); ?></td>
                  <td><?php echo e($pdln->negara); ?></td>
                  <td><?php echo e(empty(strtotime($pdln->jangka_waktu_awal)) ? $pdln->jangka_waktu_awal : Carbon\Carbon::parse(date('Y-m-d', strtotime($pdln->jangka_waktu_awal)))->isoFormat('D MMMM Y')); ?></td>
                  <td><?php echo e(empty(strtotime($pdln->jangka_waktu_akhir)) ?  $pdln->jangka_waktu_akhir : Carbon\Carbon::parse(date('Y-m-d', strtotime($pdln->jangka_waktu_akhir)))->isoFormat('D MMMM Y')); ?></td>
                  <td>
                    <a href="/pdln/<?php echo e($pdln->id); ?>" class="badge badge-info">Detail</a>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
          <!-- Card footer -->
          <div class="card-footer py-4">
            <nav aria-label="...">
              <a href="<?php echo e('/pdln/create'); ?>" class="btn btn-primary">Tambah Data</a>
              <ul class="pagination justify-content-end mb-0">
                <li class="page-item">
                  <?php echo e($pdlns->links()); ?>

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

<?php echo $__env->make('dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New DKPI\dkpi-uns\resources\views/pdln/index.blade.php ENDPATH**/ ?>