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
               
            <li class="nav-item {{ (Session::get('menu') == 'profil') ? 'menu-open':''}}">
            <a href="/user/repports" class="nav-link {{ (Session::get('menu') == 'repports') ? 'active':'' }}">
                        <i class="fa-solid fa-users"></i>
                        <p>
                            Rapports
                        </p>
                    </a>
              
                </li>
              
                <a href="/user/profil" class="nav-link {{ (Session::get('menu') == 'profil') ? 'active':'' }}">
                        <i class="fa-solid fa-users"></i>
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