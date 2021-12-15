<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>  Bag. Kerjasama, Pengambangan, dan Internasionalisasi, gd.BAA BAPSI, Jl. Ir. Sutami, Jebres, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126, Indonesia</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>dkpi@unit.uns.ac.id</p>
            </div>

            {{-- <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 55s</p>
            </div> --}}

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1977.557955402161!2d110.85618205872194!3d-7.562339500000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a170196ee6af5%3A0xb0cb66cefd551d09!2sBAA%20BAPSI!5e0!3m2!1sen!2sid!4v1635387187906!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>

          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          @if(session()->has('success'))
          <div class="alert alert-success">
              {{ session()->get('success') }}
          </div>
      @endif
          <form action="{{ route('contact.save') }}" method="post" role="form" class="php-email-form">
            @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
                @error('name')
                <span class="text-danger"> {{ $message }} </span>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
                @error('email')
                <span class="text-danger"> {{ $message }} </span>
                @enderror
              </div>
            </div>
            {{-- <div class="form-group col-md-6">
              <label for="name">Your Phone</label>
              <input type="email" class="form-control" name="phone" id="phone" required>
              @error('phone')
              <span class="text-danger"> {{ $message }} </span>
              @enderror
            </div>
          </div> --}}
          <div class="row">
          <div class="form-group col-md-6">
            <label for="name">Your Phone</label>
            <input type="number" class="form-control" name="phone" id="phone" required>
            @error('phone')
            <span class="text-danger"> {{ $message }} </span>
            @enderror
          </div>
            <div class="form-group col-md-6">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" required>
              @error('subject')
              <span class="text-danger"> {{ $message }} </span>
              @enderror
            </div>
          </div>

            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="pesan" rows="10" required></textarea>
              @error('pesan')
              <span class="text-danger"> {{ $message }} </span>
              @enderror
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>
