<header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">RVMSC</span>-SchedSys</a>

        {{-- <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form> --}}

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('aboutus') }}">About Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('events_view') }}">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('facility_view') }}">Facilities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('add_appointment_view') }}">Set Appointment</a>
            </li>
            <li class="nav-item">
                @if(Route::has('login'))
                @auth
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('myappointments') }}">My Appointments</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('show_calendar_user') }}">Calendar</a>
                </li>
                <x-app-layout>
                </x-app-layout>                
                @else
              <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
              <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
            </li>
                @endauth
                @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
