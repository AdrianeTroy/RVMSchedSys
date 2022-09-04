<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      {{-- <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/logo.svg" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a> --}}
      <h1> RVMSC<br>SchedSys</h1>
    </div>
    <ul class="nav">
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('show_calendar') }}">
          <span class="menu-icon">
            <i class="mdi mdi-calendar-check"></i>
          </span>
          <span class="menu-title">Calendar</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('add_facility_view') }}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Add Facility</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('add_event_view') }}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Add Event</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('add_app_view') }}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Add Appointment</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('show_appointments') }}">
          <span class="menu-icon">
            <i class="mdi mdi-table"></i>
          </span>
          <span class="menu-title">All Appointments</span>
        </a>
      </li>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('show_facilities') }}">
        <span class="menu-icon">
          <i class="mdi mdi-office-building"></i>
        </span>
        <span class="menu-title">All Facilities</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('show_events') }}">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">All Events</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('show_users') }}">
        <span class="menu-icon">
          <i class="mdi mdi-account-group"></i>
        </span>
        <span class="menu-title">User Accounts</span>
      </a>
    </li>
    </ul>
  </nav>
