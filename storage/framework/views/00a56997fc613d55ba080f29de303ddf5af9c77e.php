
<?php $__env->startSection('container'); ?>
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">

      <!-- ======= Portfolio Section ======= -->
      <section id="pdln" class="portfolio" style="background-color: #f3f5fa">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Data PDLN</h2>
          <p>Perjalanan Dinas Luar Negeri (PDLN) adalah adalah penugasan yang dilakukan oleh mahasiswa, dosen, maupun pimpinan dalam rangka tugas belajar dan tugas dinas lainnya di luar negeri yang disetujui oleh Rektor UNS</p>

          
        </div>

                
<div class="container">
  <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <a href="/home/pdln-mahasiswa">Mahasiswa</a>
                    <a href="/home/pdln-dosen">Dosen</a>
                    <a class="filter-active" href="/home/pdln-pimpinan">Pimpinan</a>

  </ul> </div>

  <p>
    <button class="bi bi-search btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      Cari Data
    </button>
  </p>
  <div class="collapse" id="collapseExample">
    <div class="card card-body">
      <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-6">
          <label for="validationCustom01" class="form-label">Nama</label>
          <input type="text" class="form-control" id="validationCustom01" name="nama" value="<?php echo e(request('nama')); ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Waktu Mulai</label>
            <input type="text" class="form-control" id="validationCustom02" name="jangka_waktu_awal" value="<?php echo e(request('jangka_waktu_awal')); ?>">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Waktu Berakhir</label>
            <input type="text" class="form-control" id="validationCustom03" name="jangka_waktu_akhir" value="<?php echo e(request('jangka_waktu_akhir')); ?>">
            <div class="invalid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Negara</label>
            <input type="text" class="form-control" id="validationCustom03" name="negara" value="<?php echo e(request('negara')); ?>">
            <div class="invalid-feedback">
              Looks good!
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
        <div class="portfolio-item filter-pimpinan">

            <table class="table table-hover">
              <thead>
                <tr class="text-primary">
                  <th scope="col">No.</th>
                  <th scope="col">Nama</th>
                  <th scope="col">unit kerja</th>
                  <th scope="col">negara</th>
                  <th scope="col">tujuan</th>
                  <th scope="col">awal</th>
                  <th scope="col">akhir</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $pimpinans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pimpinan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th scope="row"><?php echo e($pimpinans->firstItem() + $loop->index); ?></th>
                  <td><?php echo e($pimpinan->nama); ?></td>
                  <td><?php echo e($pimpinan->unit_kerja); ?></td>
                  <td><?php echo e($pimpinan->negara); ?></td>
                  <td><?php echo e($pimpinan->tujuan); ?></td>
                  <td><?php echo e($date = empty(strtotime($pimpinan->jangka_waktu_awal)) ? $pimpinan->jangka_waktu_awal : Carbon\Carbon::parse(date('Y-m-d', strtotime($pimpinan->jangka_waktu_awal)))->isoFormat('D MMMM Y')); ?></td>
                  <td><?php echo e($date = empty(strtotime($pimpinan->jangka_waktu_akhir)) ? $pimpinan->jangka_waktu_akhir : Carbon\Carbon::parse(date('Y-m-d', strtotime($pimpinan->jangka_waktu_akhir)))->isoFormat('D MMMM Y')); ?></td>
                  <td><?php echo e($pimpinan->status); ?></td>
                  <td>
                    <a href="/home/pdln/<?php echo e($pimpinan->id); ?>" class="badge bg-info"><span data-feather="eye">lihat</span></a>
                    <?php if(Auth::check()): ?>
                    <a href="/pdln/<?php echo e($pimpinan->id); ?>/edit" class="badge bg-warning"><span data-feather="eye">edit</span></a>
                    <form action="/pdln/<?php echo e($pimpinan->id); ?>/delete" method="POST" class="d-inline">
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
                    <?php echo e($pimpinans->links()); ?>

                  </li>
                </ul>
              </nav>
            </div>

            </div>


      </div>
    </section><!-- End Portfolio Section -->


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dkpi-uns\resources\views/home/pdln/pimpinan.blade.php ENDPATH**/ ?>