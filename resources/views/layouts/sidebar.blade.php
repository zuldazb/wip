
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
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item {{ ($title === 'Article') || ($title === 'Fabric') || ($title === 'Forecast') || ($title === 'Makloon') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ ($title === 'Article') || ($title === 'Fabric') || ($title === 'Forecast') || ($title === 'Makloon') ? 'active' : '' }}">
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
                    <li class="nav-item {{ ($title === 'Consumption') || ($title === 'SPK') || ($title === 'Incoming') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ ($title === 'Consumption') || ($title === 'SPK') || ($title === 'Incoming') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tasks"></i>
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