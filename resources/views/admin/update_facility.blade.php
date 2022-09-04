<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">

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
            <div class="row ">
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
                                <form class="forms-sample" action="{{ url('facility_change', $data->id) }}" method="POST" enctype="multipart/form-data">

                                    @csrf
                                    <div class="form-group" style="padding:15px;">
                                        <label>Facility Name</label>
                                        <input type="text" class="form-control p-input" style="color:black" name="facility_name" value="{{ $data->facility_name }}" required>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Facility Description</label>
                                        <textarea name="description" class="form-control p-input" rows="3" maxlength="10000" style="color:white" required>{{ $data->description }}</textarea>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Facility Limit</label>
                                        <input type="number" class="form-control p-input" name="number_limit" id="number_limit" min="1" max="5000" style="color:black" value="{{ $data->number_limit }}" required>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Facility Image</label>
                                        <img height="150px" width="150px" src="facilityimage/{{ $data->facility_img }}">
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Change Image</label>
                                        <input type="file" class="form-control-file" name="facility_img" id="facility_img">
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Opening time</label>
                                        <input type="time" name="start_time" id="start_time" style="color:black" min="06:00" max="12:00" value="{{ $data->start_time }}" required>
                                        <small>6:00am - 12:00pm</small>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Closing time</label>
                                        <input type="time" name="end_time" id="end_time" style="color:black" min="13:00" max="19:00" value="{{ $data->end_time }}" required>
                                        <small>1:00pm - 7:00pm</small>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
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