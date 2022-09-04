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
                    @if (session()->has('message'))            
                        <div class="alert alert-danger">
                            {{ session()->get('message') }}
                            <button type="button" class="close" data-bs-dismiss="alert">
                                x
                            </button>
                        </div>
                    @elseif (session()->has('message2'))            
                        <div class="alert alert-success">
                            {{ session()->get('message2') }}
                            <button type="button" class="close" data-bs-dismiss="alert">
                                x
                            </button>
                        </div>
                    @elseif (session()->has('message3'))            
                        <div class="alert alert-success">
                            {{ session()->get('message3') }}
                            <button type="button" class="close" data-bs-dismiss="alert">
                                x
                            </button>
                        </div>
                    @elseif (session()->has('message4'))            
                        <div class="alert alert-danger">
                            {{ session()->get('message4') }}
                            <button type="button" class="close" data-bs-dismiss="alert">
                                x
                            </button>
                        </div>
                    @endif
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Contact Number</th>
                                                    <th>Slots</th>
                                                    <th>Facility</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Letter (If applicable)</th>
                                                    <th>Status</th>
                                                    <th>Approve</th>
                                                    <th>Cancel</th>
                                                    <th>Send Mail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $appointments)
                                                <tr style="margin" @if ($loop->even) class="bg-black" @endif>
                                                    <td>{{ $loop->iteration + $data->firstItem() - 1 }}</td>
                                                    <td>{{ $appointments->name }}</td>
                                                    <td>{{ $appointments->email }}</td>
                                                    <td>{{ $appointments->contact_num }}</td>
                                                    <td>{{ $appointments->lim_slot }}</td>
                                                    <td>{{ $appointments->facility }}</td>
                                                    <td>
                                                        @if (is_null($appointments->enddate))
                                                            {{ date('F j, Y', strtotime($appointments->date)) }}
                                                        @else
                                                            {{ date('F j, Y', strtotime($appointments->date)).' - '
                                                            .date('F j, Y', strtotime($appointments->enddate)) }}
                                                        @endif
                                                    </td>
                                                    <td>{{ date('g:i A', strtotime($appointments->app_start_time)).' - '
                                                    .date('g:i A', strtotime($appointments->app_end_time))}}</td>
                                                    <td> 
                                                        @if ($appointments->letter)
                                                            <a href="{{ url('download', $appointments->id) }}">Download</a>
                                                        @endif
                                                     </td>
                                                    <td>
                                                        @if ($appointments->app_status=='Approved')
                                                            <div class="badge badge-outline-success">{{ $appointments->app_status }}</div>
                                                        @elseif ($appointments->app_status=='Pending')
                                                            <div class="badge badge-outline-warning">{{ $appointments->app_status }}</div>
                                                        @else 
                                                            <div class="badge badge-outline-danger">{{ $appointments->app_status }}</div>
                                                        @endif
                                                    </td>
                                                        @if($appointments->app_status=='Pending')
                                                            <td><a class="btn btn-success" href="{{ url('approve', $appointments->id) }}">Approve</a></td>
                                                            <td><a class="btn btn-danger" href="{{ url('cancel', $appointments->id) }}">Cancel</a></td>
                                                        @elseif ($appointments->app_status=='Approved')
                                                            <td></td>
                                                            <td><a class="btn btn-danger" href="{{ url('cancel', $appointments->id) }}">Cancel</a></td>
                                                        @else
                                                            <td><a class="btn btn-success" href="{{ url('approve', $appointments->id) }}">Approve</a></td>
                                                            <td></td>
                                                        @endif
                                                            <td> <a class="btn btn-primary" href="{{ url('send_mail', $appointments->id) }}">Send</a> </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
    @include('admin.footer')
            </div>
        </div>
    @include('admin.script')
</body>
</html>