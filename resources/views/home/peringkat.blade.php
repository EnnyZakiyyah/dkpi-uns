@extends('layouts.main')
@section('container')
<!-- ======= Hero Section ======= -->

      <!-- ======= Portfolio Section ======= -->
      <section id="pdln" class="portfolio"  style="background-color: #f3f5fa">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Data PDLN</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
                  {{-- <label for="tahun" class="form-label">Tampilkan Data Tahun</label>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                      <button class="btn btn-outline-primary" type="button" id="button-addon2">Search</button>
                    </div> --}}
  <div class="container">
    <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                      <li data-filter=".filter-thes">THES</li>
                      <li data-filter=".filter-qs">QS Star</li>
                   
    </ul> </div>
  
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <!-- CV/PT -->
              <div class="portfolio-item filter-thes">
                <div class="card">
                  <img src="{{asset('assets/img/cta-bg.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">
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
                    </p>
                  </div>
                </div>
              </div>
          </div>


              <div class="portfolio-item filter-qs">
  
                <div class="portfolio-item filter-qs">
                  <div class="card">
                    <img src="{{asset('assets/img/cta-bg.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">
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
                      </p>
                    </div>
                  </div>
                  
                  </div>
                 
  
              </div>
  
  
        </div>
      </section><!-- End Portfolio Section -->

    
      </div>
 
@endsection