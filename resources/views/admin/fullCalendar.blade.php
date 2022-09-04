<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
      <style>
        
      </style>
        <script>

          document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
              headerToolbar: {
                left: 'dayGridMonth,timeGridWeek,timeGridDay',
                center: 'title',
                right: 'today,prev,next'
              },
              events: [
              @foreach($event as $events)
                {
                    title : '{{ $events->event_name }}' ,
                    start : '{{ $events->start_date . ' ' . $events->event_start_time  }}' ,
                    end : '{{ $events->end_date . ' ' . $events->event_end_time  }}' ,
                },
              @endforeach
              @foreach ($app as $appoints)
                {
                  title : '{{ $appoints->facility . ' ' . $appoints->name}}',
                  start : '{{ $appoints->date . ' ' . $appoints->app_start_time}}',
                  end : '{{ $appoints->enddate . ' ' . $appoints->app_end_time }}',
                  color : '{{ $appoints->fac_color }}',
                  @if ($appoints->enddate == null)
                    end : '{{ $appoints->date . ' ' . $appoints->app_end_time}}',
                  @endif
                },
              @endforeach
            ],
            });
        
            calendar.render();
          });
        
        </script>
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
                          <div id="calendar" ></div>
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