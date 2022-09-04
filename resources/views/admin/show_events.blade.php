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
                                                    <th>Event Name</th>
                                                    <th>Description</th>
                                                    {{-- <th>Event Limit</th> --}}
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Image</th>
                                                    <th>Delete</th>
                                                    <th>Update</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($event as $events)
                                                    <tr>
                                                        <td>{{ $loop->iteration + $event->firstItem() - 1 }}</td>
                                                        <td>{{ $events->event_name }}</td>
                                                        <td>{{ Str::limit($events->event_desc, 45) }}</td>
                                                        {{-- <td>{{ $events->event_lim }}</td> --}}
                                                        <td>{{ date('F j, Y', strtotime($events->start_date)).' - '
                                                        .date('F j, Y', strtotime($events->end_date)) }}</td>
                                                        <td>{{ date('g:i A', strtotime($events->event_start_time)).' - '
                                                        .date('g:i A', strtotime($events->event_end_time))}}</td>
                                                        <td><img src="eventimage/{{ $events->event_img }}" alt=""></td>
                                                        <td><a onclick="return confirm('Are you sure you want to delete this event?')" class="btn btn-danger" href="{{ url('deleteevent', $events->id) }}">Delete</a></td>
                                                        <td><a class="btn btn-primary" href="{{ url('update_event', $events->id) }}">Update</a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{ $event->links() }}
                        </div>
                    </div>
                </div>
    @include('admin.footer')
            </div>
        </div>
    @include('admin.script')
</body>
</html>