
<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">

      {{-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <img src="{{asset('assets/img/slider-01.jpeg')}}" class="card-img-top" alt="...">

          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/slider-02.jpeg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/slider-03.jpeg')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> --}}

        <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Direktorat Kerjasama, Pengembangan dan Internasionalisasi</h1>
          <h2>Universitas Sebelas Maret</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://youtu.be/QvqNUeE7A74" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          {{-- <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt=""> --}}
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            {{-- <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
            </div> --}}
           
            <div class="carousel-inner">
              {{-- <div class="shadow p-3 mb-5 bg-blue rounded"> --}}
                
                {{-- <div class="carousel-item active">
               
                <img src="{{asset('assets/img/slider-01.jpeg')}}" class="d-block w-100" alt="..."></div> --}}
                @foreach($headers as $header)
              <div class="carousel-item">
                <img src="{{asset('storage/'. $header->gambar )}}" class="d-block w-100" alt="...">
              </div>
        
              {{-- <div class="carousel-item">
               <img src="{{asset('assets/img/slider-03.jpeg')}}" class="d-block w-100" alt="..."></div>
              <div class="carousel-item">
               <img src="{{asset('assets/img/slider-04.jpeg')}}" class="d-block w-100" alt="..."></div>
              <div class="carousel-item">
               <img src="{{asset('assets/img/slider-05.jpeg')}}" class="d-block w-100" alt="..."></div> --}}
           
      
            
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            @endforeach
        </div>
       
      </div>

    </div>
  </div>
    </section><!-- End Cliens Section -->
