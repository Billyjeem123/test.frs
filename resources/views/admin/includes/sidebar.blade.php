<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>FRC</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{auth()->user()->name}}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('admin_home')}}" class="nav-item nav-link {{ request()->routeIs('admin_home') ? 'active' : '' }} "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{route('show_event_page')}}" class="nav-item nav-link {{ request()->routeIs('show_event_page') ? 'active' : '' }}" ><i class="fa fa-th me-2"></i>Events</a>
            <a href="{{route('all_users')}}" class="nav-item nav-link {{ request()->routeIs('all_users') ? 'active' : '' }}" ><i class="fa fa-th me-2"></i>Users</a>
            <a href="{{route('sponsors')}}" class="nav-item nav-link {{ request()->routeIs('sponsors') ? 'active' : '' }}" ><i class="fa fa-th me-2"></i>Sponsors</a>
            <a href="{{route('gallery')}}" class="nav-item nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}" ><i class="fa fa-th me-2"></i>Gallery</a>
            <a href="{{route('blog')}}" class="nav-item nav-link {{ request()->routeIs('blog') ? 'active' : '' }}" ><i class="fa fa-th me-2"></i>Blog</a>

        </div>
    </nav>
</div>
<!-- Sidebar End -->
