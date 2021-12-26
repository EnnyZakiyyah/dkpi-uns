@extends('layouts.main')
@section('container')
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">
      <section id="data-pdln" class="services section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Layanan</h2>
            {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        <p>Direktorat Kerjasama, Pengembangan, dan Internasionalisasi (DKPI) UNS menyediakan layanan yang dapat diakses bagi seluruh civitas akademika UNS dalam beberapa hal sebagai berikut</p>
        </div>


          <div class="row">
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4><a href="">Penyusunan Legal Drafting</a></h4>
                {{-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> --}}
                <a href="/layanan/legaldrafting" class="btn-learn-more">Baca Selengkapnya</a>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4><a href="">Pengembangan PSDKU</a></h4>
                {{-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p> --}}
                <a href="#" class="btn-learn-more">Baca Selengkapnya</a>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-cash-coin"></i></div>
                <h4><a href="">Pencairan Dana Kerjasama</a></h4>
                {{-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p> --}}
                <a href="#" class="btn-learn-more">Baca Selengkapnya</a>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-user"></i></div>
                <h4><a href="">Pemrosesan Surat Izin</a></h4>
                {{-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p> --}}
                <a href="#" class="btn-learn-more">Baca Selengkapnya</a>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Services Section -->
    </div>


        {{-- <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Penyusunan Legal Drafting <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <br>
                    <h5>Alur Proses</h5>
                <ul>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. </br>
                </ul>
                <br>
                    <h5>Review</h5>
                <ul>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. </br>
                </ul>
                <br>
                    <h5>Konsultasi</h5>
                <ul>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Loroooem ipsum dolor sit amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. </br>
                </ul>
                <br>
                    <center><h5>Download File</h5></center>
                    <center><button type="button" class="btn btn-primary btn-sm">Download File</button></center>

              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Pengembangan PSDKU <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse show" data-bs-parent=".faq-list">
                <br>
                    <h5>Alur Proses</h5>
                <ul>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. </br>
                </ul>
                <br>
                <br>
                    <center><h5>Download File</h5></center>
                    <center><button type="button" class="btn btn-primary btn-sm">Download File</button></center>

              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Pencairan Dana Kerjasama <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse show" data-bs-parent=".faq-list">
                <br>
                    <h5>Alur Proses</h5>
                <ul>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. </br>
                </ul>
                <br>
                <br>
                    <center><h5>Download File</h5></center>
                    <center><button type="button" class="btn btn-primary btn-sm">Download File</button></center>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Pemrosesan Surat Izin PDLN <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <br>
                    <h5>Alur Proses</h5>
                <ul>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </br>
                   &nbsp&nbsp&nbsp<i class="ri-check-double-line"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. </br>
                </ul>
                <br>
                <br>
                    <center><h5>Download File</h5></center>
                    <center><button type="button" class="btn btn-primary btn-sm">Download File</button></center>

              </div>
            </li>

          </ul>
        </div>

      </div>
      </div> --}}

@endsection
