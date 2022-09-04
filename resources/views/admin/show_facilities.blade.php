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
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Facility Name</th>
                                                    <th>Description</th>
                                                    <th>Facility Limit</th>
                                                    <th>Opening Hours</th>
                                                    <th>Created at</th>
                                                    <th>Image</th>
                                                    <th>Delete</th>
                                                    <th>Update</th>
                                                    <th>Updated at</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($facility as $facilities)
                                                    <tr @if ($loop->even) class="bg-black" @endif>
                                                        <td>{{ $loop->iteration + $facility->firstItem() - 1 }}</td>
                                                        <td>{{ $facilities->facility_name }}</td>
                                                        <td>{{ Str::limit($facilities->description, 45) }}</td>
                                                        <td>{{ $facilities->number_limit }}</td>
                                                        <td>{{ date('g:i A', strtotime($facilities->start_time)).' - '
                                                            .date('g:i A', strtotime($facilities->end_time))}}</td>
                                                         <td>{{ date('F j, Y', strtotime($facilities->created_at))}}</td>
                                                        <td>{{ $facilities->facility_img }}</td>
                                                        <td><a onclick="return confirm('Are you sure you want to delete this facility?')" class="btn btn-danger" href="{{ url('deletefacility', $facilities->id) }}">Delete</a></td>
                                                        <td><a class="btn btn-primary" href="{{ url('update_facility', $facilities->id) }}">Update</a></td>
                                                        <td>{{ date('F j, Y', strtotime($facilities->updated_at))}}</td>
                                                    </tr>  
                                                @endforeach 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{ $facility->links() }}
                        </div>
                    </div>
                </div>
    @include('admin.footer')
            </div>
        </div>
    @include('admin.script')
</body>
</html>