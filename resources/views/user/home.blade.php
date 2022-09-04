<!DOCTYPE html>
<html lang="en">
<head>
@include('user.css')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

@include('user.header')
  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/facilities/sportscomplex.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Ramon V. Mitra Jr. Sports Complex</span>
        <h1 class="display-4">Scheduling System</h1>
        <a href="{{ url('add_appointment_view') }}" class="btn btn-primary">Set Appointment</a>
      </div>
    </div>
  </div>
  <div class="bg-light">
    <div class="page-section">
      <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 py-1 wow fadeInUp">
            <h1><b>Who was Ramon V. Mitra?</b></h1><br>
            <p class="text-justify text-grey mb-4">Ramon V. Mitra was a Filipino statesman, diplomat, and pro-democracy activist. He served as Speaker of the House of Representatives of the Philippines from 1987 to 1992. Prior to that, he was Corazon Aquino's first minister of Agriculture from 1986 to 1987, a member of the Batasang Pambansa from 1984 to 1986 and a senator during the 7th Congress. </p>
            <small class="text-grey mb-4">Learn more from <a href="https://en.wikipedia.org/wiki/Ramon_Mitra_Jr.">https://en.wikipedia.org/wiki/Ramon_Mitra_Jr.</a> </small>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="ramonvmitra.jpg" alt="">
            </div>
            </div>
          </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->
@include('user.links')
@include('user.footer')
@include('user.script')
</body>
</html>