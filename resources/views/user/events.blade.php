<div class="page-section">
  <div class="container">
    <h1 class="text-center wow fadeInUp"><b>Events</b></h1>
      <div class="row mt-5">
        
        @foreach ($event as $events)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="{{ url('event_details', $events->id) }}" class="post-thumb">
                <img height="300px" width="300px" src="eventimage/{{ $events->event_img }}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="{{ url('event_details', $events->id) }}">{{ $events->event_name }}</a></h5>
              <span class="text-sm text-grey">{{ date('F j, Y', strtotime($events->start_date)) }} - {{ date('F j, Y', strtotime($events->end_date)) }}</span><br>
              <span class="text-sm text-grey">{{ date('g:i A', strtotime($events->event_start_time)) }} - {{ date('g:i A', strtotime($events->event_end_time)) }}</span><br>
            </div>
          </div>
        </div>
        @endforeach

    </div>
  </div>
</div> <!-- .page-section -->
