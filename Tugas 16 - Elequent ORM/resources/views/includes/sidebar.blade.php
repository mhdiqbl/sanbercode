<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                @auth
                    <a href="#" class="d-block">{{ Auth::user()->name }} ({{ Auth::user()->profile->umur }})</a>
                @endauth
                @guest
                    <a href="#" class="d-block">BELUM LOGIN</a>
                @endguest
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                @auth
                    <li class="nav-item menu-open">
                        <a href="/cast" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Cast
                            </p>
                        </a>
                    </li>
                @endauth
                @auth
                    <li class="nav-item menu-open">
                        <a href="/profile" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>
                @endauth
                @auth
                    <li class="nav-item menu-open">
                        <a href="/genre" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Genre
                            </p>
                        </a>
                    </li>
                @endauth

                <li class="nav-item menu-open">
                    <a href="/film" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Film
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="right fas fa-angle-left"></i>
                        <p>
                            Table
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/data-table" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Table</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/table" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @auth
                    <li class="nav-item bg-danger">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                                                                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="nav-item bg-primary">
                        <a href="/login" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Login
                            </p>
                        </a>
                    </li>
                @endguest


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
