
<?php $__env->startSection('container'); ?>

      <!-- ======= Portfolio Section ======= -->
      <br>
      <section id="pdln" class="portfolio" style="background-color: #f3f5fa">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Data PDLN</h2>
          <p>Perjalanan Dinas Luar Negeri (PDLN) adalah adalah penugasan yang dilakukan oleh mahasiswa, dosen, maupun pimpinan dalam rangka tugas belajar dan tugas dinas lainnya di luar negeri yang disetujui oleh Rektor UNS</p>

          
        </div>

<div class="container">
  <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <a class="filter-active" href="/home/pdln-mahasiswa">Mahasiswa</a>
                    <a href="/home/pdln-dosen">Dosen</a>
                    <a href="/home/pdln-pimpinan">Pimpinan</a>

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
          <input type="text" class="form-control" id="validationCustom01" name="nama" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom02" class="form-label">Waktu Mulai</label>
          <input type="text" class="form-control" id="validationCustom02" name="jangka_waktu_awal"required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">Waktu Berakhir</label>
          <input type="text" class="form-control" id="validationCustom03" name="jangka_waktu_akhir"required>
          <div class="invalid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">Negara</label>
          <input type="text" class="form-control" id="validationCustom03" name="negara" required>
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
            <div class="portfolio-item filter-mahasiswa">

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
                <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th scope="row"><?php echo e($mahasiswas->firstItem() + $loop->index); ?></th>
                  <td><?php echo e($mahasiswa->nama); ?></td>
                  <td><?php echo e($mahasiswa->unit_kerja); ?></td>
                  <td><?php echo e($mahasiswa->negara); ?></td>
                  <td><?php echo e($mahasiswa->tujuan); ?></td>
                  <td><?php echo e($date = empty(strtotime($mahasiswa->jangka_waktu_awal)) ? $mahasiswa->jangka_waktu_awal : Carbon\Carbon::parse(date('Y-m-d', strtotime($mahasiswa->jangka_waktu_awal)))->isoFormat('D MMMM Y')); ?></td>
                  <td><?php echo e($date = empty(strtotime($mahasiswa->jangka_waktu_akhir)) ? $mahasiswa->jangka_waktu_akhir : Carbon\Carbon::parse(date('Y-m-d', strtotime($mahasiswa->jangka_waktu_akhir)))->isoFormat('D MMMM Y')); ?></td>
                  <td><?php echo e($mahasiswa->status); ?></td>
                  <td></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>

            <!-- Pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <?php echo e($mahasiswas->links()); ?>

                  </li>
                </ul>
              </nav>
            </div>
            <div class="portfolio-item filter-dosen">

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
                    <?php $__currentLoopData = $dosens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dosen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <th scope="row"><?php echo e($loop->iteration); ?></th>
                      <td><?php echo e($dosen->nama); ?></td>
                      <td><?php echo e($dosen->unit_kerja); ?></td>
                      <td><?php echo e($dosen->negara); ?></td>
                      <td><?php echo e($dosen->tujuan); ?></td>
                      <td><?php echo e($date = empty(strtotime($dosen->jangka_waktu_awal)) ? $dosen->jangka_waktu_awal : Carbon\Carbon::parse(date('Y-m-d', strtotime($dosen->jangka_waktu_awal)))->isoFormat('D MMMM Y')); ?> }}</td>
                      <td><?php echo e($date = empty(strtotime($dosen->jangka_waktu_akhir)) ? $dosen->jangka_waktu_akhir : Carbon\Carbon::parse(date('Y-m-d', strtotime($dosen->jangka_waktu_akhir)))->isoFormat('D MMMM Y')); ?> }}</td>
                      <td><?php echo e($dosen->status); ?></td>
                      <td></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>

                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <li class="page-item">
                        <?php echo e($dosens->links()); ?>

                      </li>
                    </ul>
                  </nav>
                </div>
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
                          <th scope="row"><?php echo e($loop->iteration); ?></th>
                          <td><?php echo e($pimpinan->nama); ?></td>
                          <td><?php echo e($pimpinan->unit_kerja); ?></td>
                          <td><?php echo e($pimpinan->negara); ?></td>
                          <td><?php echo e($pimpinan->tujuan); ?></td>
                          <td><?php echo e($date = empty(strtotime($pimpinan->jangka_waktu_awal)) ? $pimpinan->jangka_waktu_awal : Carbon\Carbon::parse(date('Y-m-d', strtotime($pimpinan->jangka_waktu_awal)))->isoFormat('D MMMM Y')); ?> }}</td>
                          <td><?php echo e($date = empty(strtotime($pimpinan->jangka_waktu_akhir)) ? $pimpinan->jangka_waktu_akhir : Carbon\Carbon::parse(date('Y-m-d', strtotime($pimpinan->jangka_waktu_akhir)))->isoFormat('D MMMM Y')); ?> }}</td>
                          <td><?php echo e($pimpinan->status); ?></td>
                          <td></td>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/home/pdln.blade.php ENDPATH**/ ?>