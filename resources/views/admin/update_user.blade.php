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
                                <form class="forms-sample" action="{{ url('user_change', $data->id) }}" method="POST" enctype="multipart/form-data">

                                    @csrf
                                    <div class="form-group" style="padding:15px;">
                                        <label>Name</label>
                                        <input type="text" class="form-control p-input" style="color:black" name="name" value="{{ $data->name }}" required>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Email</label>
                                        <input type="text" class="form-control p-input" style="color:black" name="email" value="{{ $data->email }}" required>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Address</label>
                                        <textarea name="address" class="form-control p-input" rows="3" maxlength="3000" style="color:white">{{ $data->address }}</textarea>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                        <label>Phone Number</label>
                                        <input type="number" class="form-control p-input" name="phone" value="{{ $data->phone }}" style="color:black" required>
                                    </div>

                                    {{-- <div class="form-group" style="padding:15px;">
                                        <label>Profile Picture</label>
                                        <input type="file" class="form-control-file" name="user_img" value="{{ $data->user_img }}" required>
                                    </div> --}}
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