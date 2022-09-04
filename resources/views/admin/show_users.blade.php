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
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Contact Number</th>
                                                    <th>Address</th>
                                                    {{-- <th>Delete</th> --}}
                                                    <th>Created at</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($user as $users)
                                                    <tr @if ($loop->even) class="bg-black" @endif>
                                                        @if ($users->usertype == 0)
                                                            <td>{{ $loop->iteration + $user->firstItem() - 2 }}</td>
                                                            <td>{{ $users->name }}</td>
                                                            <td>{{ $users->email }}</td>
                                                            <td>{{ $users->phone }}</td>
                                                            <td>{{ Str::limit($users->address, 45) }}</td>
                                                            {{-- <td><a onclick="return confirm('Are you sure you want to delete this user?')" class="btn btn-danger" href="{{ url('deleteuser', $users->id) }}">Delete</a></td> --}}
                                                            {{-- <td><a class="btn btn-primary" href="{{ url('update_user', $users->id) }}">Update</a></td> --}}
                                                            <td>{{ date('F j, Y', strtotime($users->created_at)) }}</td>
                                                        @endif
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{ $user->links() }}
                        </div>
                    </div>
                </div>
    @include('admin.footer')
            </div>
        </div>
    @include('admin.script')
</body>
</html>