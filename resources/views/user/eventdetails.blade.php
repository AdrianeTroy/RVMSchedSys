<!DOCTYPE html>
<html lang="en">
<head>
@include('user.css')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

@include('user.header')
  <div class="bg-light">
    <div class="page-section">
      <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 py-1 wow fadeInUp">
            <h1><b>{{ $event->event_name }}</b></h1><br>
            <p class="text-justify text-grey mb-4">{{ $event->event_desc }}</p>
            <h1><b>Opening hours</b></h1><br>
            <p class="text-justify text-grey mb-4">{{ date('g:i A', strtotime($event->event_start_time)) }} - {{ date('g:i A', strtotime($event->event_end_time)) }}</p>
            <h1><b>Date Period</b></h1><br>
            <p class="text-justify text-grey mb-4">{{ date('F j, Y', strtotime($event->start_date)) }} - {{ date('F j, Y', strtotime($event->end_date)) }}</p>
            <small class="text-grey mb-4">Learn more from <a href="https://en.wikipedia.org/wiki/{{ $event->event_name }}">https://en.wikipedia.org/wiki/{{ $event->event_name }}.</a> </small>
        </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="/eventimage/{{ $event->event_img }}" alt="">
            </div>
            </div>
          </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->
@include('user.footer')
@include('user.script')
</body>
</html>