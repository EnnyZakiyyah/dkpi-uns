@extends('layouts.main')
@section('container')
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">
    <section id="layanan" class="portfolio">
        <div class="container" data-aos="fade-up">

            <main id="main">

                <!-- ======= Breadcrumbs ======= -->
                <section id="breadcrumbs" class="breadcrumbs">
                  <div class="container">
            
                    <ol>
                      <li><a href="/home/berita">Berita</a></li>
                      <li>Berita Details</li>
                    </ol>
                    <h2>Berita Details</h2>
            
                  </div>
                </section><!-- End Breadcrumbs -->
            
                <!-- ======= Portfolio Details Section ======= -->
                <section id="portfolio-details" class="portfolio-details">
                  <div class="container">
            
                    <div class="row gy-4">
            
                      <div class="col-lg-12">
                        <div class="portfolio-details-slider swiper-container">
                          <div class="swiper-wrapper align-items-center">
            
                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/cta-bg.jpg')}}" alt="">
                            </div>
            
                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/cta-bg.jpg')}}" alt="">
                            </div>
            
                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/cta-bg.jpg')}}" alt="">
                            </div>
            
                          </div>
                          <div class="swiper-pagination"></div>
                        </div>
                      </div>
            
                    </div>
                    <div class="col-lg-12">
                      <div class="portfolio-description">
                        <h2>This is an example of portfolio detail</h2>
                        <p>
                          Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                        </p>
                            <strong>Category</strong>&nbsp;Penandatanganan<br/>
                            <strong>Client</strong>&nbsp;: BSI<br/>
                            <strong>Project date</strong>&nbsp;: 01 March, 2020<br/>
                            <strong>Project URL</strong>&nbsp;: <a href="https://youtu.be/YHyO-N8OkSQ">https://youtu.be/YHyO-N8OkSQ</a><br/>
                     
                      </div>
                    </div>  
            
                  </div>
                </section><!-- End Portfolio Details Section -->
            
              </main><!-- End #main -->
            
        </div>
  </div>
</section><!-- End Skills Section -->
</div>
   
           
 
@endsection