<?php $__env->startSection('container'); ?>
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">

      <!-- ======= Portfolio Section ======= -->
      <section id="mitra" class="portfolio"  style="background-color: #f3f5fa">
      <div class="container" data-aos="fade-up">



        <div class="section-title">
          <h2>Mitra Kerja Sama</h2>
            <p>Data Mitra yang menjalin hubungan kerjasama dengan UNS dapat dilihat pada tabel berikut</p>
          
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <a href="/home/mitra-yayasan">yayasan</a>
            <a href="/home/mitra-cv">cv</a>
            <a href="/home/mitra-internasional">internasional</a>
            <a href="/home/mitra-jasaKeuangan">jasaKeuangan</a>
            <a href="/home/mitra-pemerintah">pemerintah</a>
        </ul>

        <p>
          <button class="bi bi-search btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Cari Data
          </button>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <form class="row g-3 needs-validation" action="/home/mitra">
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Nama Instansi</label>
                <input type="text" class="form-control" id="validationCustom01" name="nama_instansi" value="<?php echo e(request('nama_instansi')); ?>" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Awal</label>
                <input type="date" class="form-control" id="validationCustom02" name="waktu_mulai" value="<?php echo e(request('waktu_mulai')); ?>" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              
              <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Akhir</label>
                <input type="date" class="form-control" id="validationCustom03" name="waktu_berakhir" value="<?php echo e(request('waktu_berakhir')); ?>" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
              
              <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Pejabat Penandatangan</label>
                <input type="text" class="form-control" id="validationCustom03" name="pejabat" value="<?php echo e(request('pejabat')); ?>" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
              
              <div class="col-12">
                <button class="btn btn-warning" type="submit">Cari Data</button>
              </div>
            </form>
          </div>
        </div>

<br/>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <!-- CV/PT -->
        <div class="portfolio-item filter-yayasan">
            <table class="table table-hover">
                <h5>YAYASAN/SEKOLAH</h5>
              <thead>
                <tr class="text-primary">
                  <th scope="col">No.</th>
                  <th scope="col">Nama Instansi</th>
                  <th scope="col">Ruang Lingkup</th>
                  <th scope="col">Awal</th>
                  <th scope="col">Akhir</th>
                  <th scope="col">Pejabat Penandatangan</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $yayasans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yayasan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th scope="row"><?php echo e($loop->iteration); ?></th>
                  <td><?php echo e($yayasan->nama_instansi); ?></td>
                  <td><?php echo e($yayasan->ruang_lingkup); ?></td>
                  <td><?php echo e($yayasan->jangka_waktu_awal); ?></td>
                  <td><?php echo e($yayasan->jangka_waktu_akhir); ?></td>
                  <td><?php echo e($yayasan->pejabat_penandatangan); ?></td>
                  <td><?php echo e($yayasan->status); ?></td>
                  <td>
                    <a href="/home/mitra/<?php echo e($yayasan->id); ?>" class="badge bg-info"><span data-feather="eye">lihat</span></a>
                    <?php if(Auth::check()): ?>
                    <a href="/mitra/<?php echo e($yayasan->id); ?>/edit" class="badge bg-warning"><span data-feather="eye">edit</span></a>
                    <form action="/mitra/<?php echo e($yayasan->id); ?>" method="POST" class="d-inline">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="badge bg-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
                    </form>
                    <?php endif; ?>
                </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>

            <!-- Pagination -->
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  
                </li>
              </ul>
            </nav>
        </div>





        </div>

      </div>
    </section><!-- End Portfolio Section -->


    </div>

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dkpi-uns\resources\views/home/mitra/yayasan.blade.php ENDPATH**/ ?>