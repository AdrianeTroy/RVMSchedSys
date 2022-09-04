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
                                <form class="forms-sample" action="{{ url('event_change', $data->id) }}" method="POST" enctype="multipart/form-data">

                                    @csrf
                                    <div class="form-group" style="padding:15px;">
                                        <label>Event Name</label>
                                        <input type="text" class="form-control p-input" style="color:black" name="event_name" id="event_name" value="{{ $data->event_name }}" required>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Event Description</label>
                                        <textarea name="event_desc" class="form-control p-input" id="event_desc" rows="3" maxlength="3000" style="color:white" required>{{ $data->event_desc }}</textarea>
                                    </div>
                                    {{-- <div class="form-group" style="padding:15px;">
                                        <label>Event Facility Limit</label>
                                        <input type="number" class="form-control p-input" name="event_lim" id="event_lim" min="1" max="5000" style="color:black" value="{{ $data->event_lim }}" required>
                                    </div> --}}
                                    <div class="form-group" style="padding:15px;">
                                        <label>Event Image</label>
                                        <img height="150px" width="150px" src="eventimage/{{ $data->event_img }}">
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Change Image</label>
                                        <input type="file" class="form-control-file" name="event_img" id="event_img">
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Starting Date</label>
                                        <input type="date" name="start_date" id="start_date" value="{{ $data->start_date }}" style="color:black" required>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Ending Date</label>
                                        <input type="date" name="end_date" id="end_date" value="{{ $data->end_date }}" style="color:black" required>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Opening time</label>
                                        <input type="time" name="event_start_time" id="event_start_time" style="color:black" min="04:00" max="12:00" value="{{ $data->event_start_time }}" required>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Closing time</label>
                                        <input type="time" name="event_end_time" id="event_end_time" style="color:black" min="13:00" max="22:00" value="{{ $data->event_end_time }}" required>
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