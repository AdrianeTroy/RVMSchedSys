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
      <div class="container">
        @include('user.facility')
      </div>
  </div> <!-- .bg-light -->
@include('user.footer')
@include('user.script')
</body>
</html>