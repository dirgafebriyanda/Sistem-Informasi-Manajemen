<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#" >
                <img src="{{ asset('img/icon/putih.png') }}" alt="" class="img-fluid">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Blog & Services
            </div>

            <!-- Nav Item - Posts -->
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Posts</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/services*') ? 'active' : '' }}" href="/dashboard/services">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Service</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/galleries*') ? 'active' : '' }}" href="/dashboard/galleries">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Gallery</span></a>
            </li>

            <!-- Nav Item - Tables -->
            @can('admin') 
            <div class="sidebar-heading">
                Admin
            </div>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Categories</span></a>
            </li>
            @endcan

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>