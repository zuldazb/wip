
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">WIP Mutif</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div> --}}

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-database"></i>
                            <p>
                                Database
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/articles" class="nav-link {{ ($title === 'Article') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Article</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/fabrics" class="nav-link {{ ($title === 'Fabric') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Fabric</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/forecasts" class="nav-link {{ ($title === 'Forecast') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Forecast</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/makloons" class="nav-link {{ ($title === 'Makloon') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Makloon</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-database"></i>
                            <p>
                                WIP
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/consumptions" class="nav-link {{ ($title === 'Consumption') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Consumption</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/spk_s" class="nav-link {{ ($title === 'SPK') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SPK</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/incomings" class="nav-link {{ ($title === 'Incoming') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Incoming</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->