@include('user.css')
@include('user.header')
{{-- Individual --}}
<div class="page-section">
    <div class="container">
      @if (session()->has('message'))            
      <div class="alert alert-success">
          {{ session()->get('message') }}
          <button type="button" class="close" data-dismiss="alert">
              x
          </button>
      </div>
      @endif
      <form class="main-form" action="{{ url('appointment') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (Route::has('login'))
        @auth
        <h1 class="text-center wow fadeInUp">Make Appointment</h1>
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <label for="date">Date</label>
            <input type="date" name="date" id="datePickerId" class="form-control" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <label for="enddate">End date (if more than a day)</label>
            <input type="date" name="enddate" id="enddatePickerId" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <label for="app_start_time">Facility</label>
            <select name="facility" id="facility" class="custom-select">
              @foreach ($facility as $facilities)
                <option value="{{ $facilities->facility_name }}">{{ $facilities->facility_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <label for="lim_slot">No. of Participant</label>
            <input type="number" name="lim_slot" class="form-control" placeholder="No. of people (1-100)" min="1" max="100" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <label for="name="app_start_time>Start Time</label>
            <input type="time" name="app_start_time" id="app_start_time" class="form-control" value="06:00" min="06:00" max="19:00" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <label for="name="app_end_time>End Time</label>
            <input type="time" name="app_end_time" id="app_end_time"class="form-control" value="13:00" min="06:00" max="19:00" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <label>Letter of Request (If Applicable)</label>
            <input type="file" class="form-control-file" name="letter" id="letter">
          </div>
        </div>
        <button type="submit" class="btn btn-outline-primary mt-3 wow zoomIn">Submit Request</button>
          @else
          <h1 class="text-center wow fadeInUp">Please login or create an account to set an appointment</h1>
          {{-- <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name" required><br>
            <input type="number" name="slots" class="form-control" placeholder="No. of people (1-100)" min="1" max="100" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address" required><br>
            <input type="number" name="contact_num" class="form-control" placeholder="Phone number" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <label for="name="app_start_time>Date</label>
            <input type="date" name="date" id="datePickerId" class="form-control" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <label for="name="app_start_time>End date (if more than a day)</label>
            <input type="date" name="enddate" id="enddatePickerId" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <label for="name="app_start_time>Start Time</label>
            <input type="time" name="app_start_time" id="app_start_time" class="form-control" value="06:00" min="06:00" max="19:00" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <label for="name="app_start_time>Facility</label>
            <select name="facility" id="facility" class="custom-select">
              @foreach ($facility as $facilities)
                <option value="{{ $facilities->facility_name }}">{{ $facilities->facility_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <label for="name="app_end_time>End Time</label>
            <input type="time" name="app_end_time" id="app_end_time"class="form-control" value="13:00" min="06:00" max="19:00" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <label>Letter of Request (If Applicable)</label>
            <input type="file" class="form-control-file" name="letter" id="letter">
          </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button> --}}
        @endauth
        @endif
      </form>
      
    </div>
</div> <!-- .page-section -->
@include('user.footer')
@include('user.script')
