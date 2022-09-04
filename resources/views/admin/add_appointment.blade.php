<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                                @if (session()->has('message'))            
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                        <button type="button" class="close" data-bs-dismiss="alert">
                                            x
                                        </button>
                                    </div>
                                @endif
                            <form class="main-form" action="{{ url('upload_app') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if (Route::has('login'))
                                @auth
                                <h1 class="text-center wow fadeInUp">Make Appointment</h1>
                                <div class="row mt-5 ">
                                    <div class="form-group col-12 col-sm-6" style="padding:15px;">
                                    <label for="date">Date</label>
                                    <input type="date" name="date" id="datePickerId" class="form-control-file" style="color:black" required>
                                    </div>
                                    <div class="form-group col-12 col-sm-6" style="padding:15px;">
                                    <label for="enddate">End date (if more than a day)</label>
                                    <input type="date" name="enddate" id="enddatePickerId" class="form-control-file" style="color:black">
                                    </div>
                                    <div class="form-group col-12 col-sm-6" style="padding:15px;">
                                    <label for="facility">Facility</label>
                                    <select name="facility" id="facility" class="custom-select" style="color:black">
                                        @foreach ($facility as $facilities)
                                        <option value="{{ $facilities->facility_name }}">{{ $facilities->facility_name }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="form-group col-12 col-sm-6" style="padding:15px;">
                                    <label for="lim_slot">Number of participants</label>
                                    <input type="number" name="lim_slot" class="form-control-file" placeholder="Num." style="color:black" min="1" max="100" required>
                                    </div>
                                    <div class="form-group col-12 col-sm-6" style="padding:15px;">
                                    <label for="app_start_time">Start Time</label>
                                    <input type="time" name="app_start_time" id="app_start_time" class="form-control-file" style="color:black" value="06:00" min="06:00" max="19:00" required>
                                    </div>
                                    <div class="form-group col-12 col-sm-6" style="padding:15px;">
                                    <label for="app_end_time">End Time</label>
                                    <input type="time" name="app_end_time" id="app_end_time" class="form-control-file" style="color:black" value="13:00" min="06:00" max="19:00" required>
                                    </div>
                                    <div class="form-group col-12 col-sm-6" style="padding:15px;">
                                        <label for="letter">Letter of Request (If Applicable)</label>
                                        <input type="file" class="form-control-file" id="letter" name="letter" aria-describedby="fileHelp">
                                    </div>
                                    <div class="form-group col-12 col-sm-6">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                                @endauth
                                @endif
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @include('admin.footer')
    </div>
    </div>
    @include('admin.script')
</body>
</html>