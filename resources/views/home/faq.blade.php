@extends('layouts.main')
@section('container')
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">
   <!-- ======= Frequently Asked Questions Section ======= -->
   <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Frequently Asked Questions</h2>
        {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
      </div>

      <div class="faq-list">
        <ul>

            @foreach ($faqs as $faq)


          <li data-aos="fade-up" data-aos-delay="{{ $i = $loop->iteration }}00">
        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-{{ $i }}">{!! $faq->pertanyaan !!}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-{{ $i }}" class="collapse show" data-bs-parent=".faq-list">
              <p>{{ $faq->jawaban }}</p>
            </div>
          </li>
          @endforeach

        </ul>
      </div>

    </div>
    </section><!-- End Frequently Asked Questions Section -->
    </div>



@endsection
