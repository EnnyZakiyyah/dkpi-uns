@extends('layouts.main')
@section('container')

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

      <div class="section-title">
          <h2>Frequently Asked Questions</h2></a>
      </div>

      <div class="faq-list">
          @foreach ($faqs as $faq)
          <ul>
              <li data-aos="fade-up" data-aos-delay="{{ $i = $loop->iteration }}00">
                  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                      class="collapse text-capitalize" data-bs-target="#faq-list-{{ $i }}">{{ $faq->pertanyaan }} <i
                          class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-{{ $i }}" class="collapse show" data-bs-parent=".faq-list">
                      <p>{!! $faq->jawaban !!}</p>
                      <a href="{{ $faq->link }}">Selengkapnya</a>
                  </div>
              </li>
          </ul>
          @endforeach
      </div>

  </div>
</section><!-- End Frequently Asked Questions Section -->

@endsection
