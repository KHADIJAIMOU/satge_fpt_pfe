<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height:100%">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image"> <span style="color:white">    </span>
            </div>
            <div class="info">
                <a href="#" class="d-block"><b></b></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/admin/dashboard" class="nav-link {{ Session::get('menu') == 'dashboard' ? 'active':'' }}">
                                <i class="fa-solid fa-chart-line"></i>
                                <p>
                                    Tableau de Bord
                                </p>
                            </a>
                        </li>
           
                <li class="nav-item">
                    <a href="/admin/repports" class="nav-link {{ (Session::get('menu') == 'repports') ? 'active':'' }}">
                            <i class="fa-solid fa-file"></i>
                            <p>
                                Rapports
                            </p>
                        </a>
                    </li>
                
                    <li class="nav-item">
                        <a href="/conversations" class="nav-link {{ (Session::get('menu') == 'conversations') ? 'active':'' }}">
                                <i class="fa-solid fa-message"></i>
                                <p>
                                    Messages
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/events" class="nav-link {{ (Session::get('menu') == 'events') ? 'active':'' }}">
                                <i class="fa-solid fa-calendar-days"></i>                                        Evénements
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/avis" class="nav-link {{ (Session::get('menu') == 'avis') ? 'active':'' }}">
                                      <i class="fa-solid fa-lightbulb"></i>
                                    Avis
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/reclamations" class="nav-link {{ (Session::get('menu') == 'avis') ? 'active':'' }}">
                                        <i class="fa-solid fa-circle-exclamation"></i>                                      Reclamatons
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/users" class="nav-link {{ (Session::get('menu') == 'users') ? 'active':'' }}">
                                                <i class="fa-solid fa-users"></i>
                                                <p>
                                                    Utilisateurs
                                                </p>
                                            </a>
                                        </li>
                <li class="nav-item">
                <a href="/admin/profil" class="nav-link {{ (Session::get('menu') == 'profil') ? 'active':'' }}">
                        <i class="fa-solid fa-user"></i>
                        <p>
                            profil
                        </p>
                    </a>
                </li>

                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>