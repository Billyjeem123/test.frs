 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="index.html" class="navbar-brand">
        <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>FRC</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">
            {{-- <li>
                <a href="{{ route('value.vehicle') }}" class="{{ request()->routeIs('value.vehicle') ? 'active' : '' }}">Value Asset</a>
            </li> --}}
            <a href="{{ route('ourhomepage') }}"  class="nav-item nav-link {{ request()->routeIs('ourhomepage') ? 'active' : '' }}">Home</a>
            <a href="{{route("about")}}" class="nav-item nav-link  {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
            <a href="{{route("event")}}" class="nav-item nav-link  {{ request()->routeIs('event') ? 'active' : '' }}">Event</a>

            <a href="{{route('sponsor')}}" class="nav-item nav-link  {{ request()->routeIs('sponsor') ? 'active' : '' }}">Become A Sponsor</a>
            <a href="{{route("blog_home")}}" class="nav-item nav-link {{ request()->routeIs('blog_home') ? 'active' : '' }}">Blog News</a>
             <a href="{{route("contact")}}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }} ">Contact Us</a>
           {{-- <a href="classes.html" class="nav-item nav-link">Contact Us</a>
           <div class="nav-item dropdown">
               <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
               <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                   <a href="facility.html" class="dropdown-item">School Facilities</a>
                   <a href="team.html" class="dropdown-item">Popular Teachers</a>
                   <a href="call-to-action.html" class="dropdown-item">Become A Teachers</a>
                   <a href="appointment.html" class="dropdown-item">Make Appointment</a>
                   <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                   <a href="404.html" class="dropdown-item">404 Error</a>
               </div>
           </div> --}}


        </div>

        @if(auth()->check())
        <a href="javascript:void(0)" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Logged In<i class="fa fa-arrow-right ms-3"></i></a>
        @else
 <a href="{{ route('register') }}" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Become A Memeber<i class="fa fa-arrow-right ms-3"></i></a>
        @endif

    </div>
</nav>
