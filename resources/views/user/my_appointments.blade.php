@include('user.css')
@include('user.header')
<div class="page-section">
    <div class="container">
        @if (session()->has('message'))            
        <div class="alert alert-danger">
            {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert">
                x
            </button>
        </div>
        @endif
        <h1 class="text-center wow fadeInUp">My Appointments</h1><br>

        <div class="table-responsive" align="center" style="70px">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Slots</th>
                    <th>Date</th>
                    <th>Facility</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Cancel Appointment</th>
                </tr>
                @foreach ($appoint as $appoints)
                    <tr style="margin" @if ($loop->even) class="bg-grey" @endif>
                            <td>{{ $loop->iteration + $appoint->firstItem() - 1 }}</td>
                            <td>{{ $appoints->name  }}</td>
                            <td>{{ $appoints->lim_slot }}</td>
                            <td>{{ $appoints->facility }}</td>
                            <td>
                        @if (is_null($appoints->enddate))
                            {{ date('F j, Y', strtotime($appoints->date)) }}
                        @else
                            {{ date('F j, Y', strtotime($appoints->date)).' - '
                            .date('F j, Y', strtotime($appoints->enddate)) }}
                        @endif
                            </td>
                            <td>{{ date('g:i A', strtotime($appoints->app_start_time)).' - '.date('g:i A', strtotime($appoints->app_end_time))}}
                            <td>{{ $appoints->app_status }}</td>
                        @if ($now > $appoints->date)
                            <td></td>
                        @else
                            <td>
                                <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Schedule?')" href="{{ url('cancel_appoint', $appoints->id) }}">Cancel</a>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </table>
        </div>
        {{ $appoint->links() }}

    </div>
</div>

@include('user.script')
@include('user.footer')