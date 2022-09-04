<div class="page-section bg-light">
<h1 class="text-center wow fadeInUp"><b>Facilities</b></h1>
<div class="container">
      <div class="row mt-5">

        @foreach ($facility as $facilities)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="{{ url('facility_details', $facilities->id) }}" class="post-thumb">
                <img height="300px" width="300px" src="facilityimage/{{ $facilities->facility_img }}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="{{ url('facility_details', $facilities->id) }}">{{ $facilities->facility_name }}</a></h5>
              <span class="text-sm text-grey">{{ date('g:i A', strtotime($facilities->start_time)) }} - {{ date('g:i A', strtotime($facilities->end_time)) }}</span><br>
              <div id="clr" style="background-color:{{$facilities->facility_color}}"></div>
                {{-- <small class="text-sm text-grey">
                  @foreach ($appoint as $app)
                      {{ $facilities->number_limit-$app->where('app_status', '=', 'Approved')->where('facility', '=', $facilities->facility_name)->sum('lim_slot') }}
                  @endforeach
                  /{{ $facilities->number_limit }} slot/s
                </small> --}}
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</div> <!-- .page-section -->

