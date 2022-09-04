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
                                <form class="forms-sample" action="{{ url('upload_facility') }}" method="POST" enctype="multipart/form-data">

                                    @csrf
                                    <div class="form-group" style="padding:15px;">
                                        <label>Facility Name</label>
                                        <input type="text" class="form-control p-input" style="color:black" name="facility_name" id="facility_name" placeholder="Write facility name..." required>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Facility Description</label>
                                        <textarea name="description" class="form-control p-input" id="description" rows="6" maxlength="10000" style="color:white" placeholder="Write facility description..." required></textarea>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Facility Limit</label>
                                        <input type="number" class="form-control p-input" name="number_limit" id="number_limit" min="1" max="5000" style="color:black" placeholder="1-5000" required>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Facility Color</label>
                                        <input type="color" class="form-control p-input" name="facility_color" id="facility_color" required>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Facility Image</label>
                                        <input type="file" class="form-control-file" name="facility_img" id="facility_img" required>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Opening time</label>
                                        <input type="time" name="start_time" id="start_time" style="color:black" value="06:00" min="06:00" max="12:00" required>
                                        <small>6:00am - 12:00pm</small>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Closing time</label>
                                        <input type="time" name="end_time" id="end_time" style="color:black" value="13:00" min="13:00" max="19:00" required>
                                        <small>1:00pm - 7:00pm</small>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <button type="submit" class="btn btn-primary">Add Facility</button>
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