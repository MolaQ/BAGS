<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">BAGS 2022</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' :'' }}">
                    <i class="nav-icon fas fa-play"></i>
                  <p>
                    BAGSPanel
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.teams') }}" class="nav-link {{ request()->is('admin/teams') ? 'active' :'' }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Zespoły
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.stages') }}" class="nav-link {{ request()->is('admin/stages') ? 'active' :'' }}">
                    <i class="nav-icon fas fa-clipboard-list"></i>
                  <p>
                    Zadania
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.users') }}" class="nav-link {{ request()->is('admin/users') ? 'active' :'' }}">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Organizatorzy
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link {{ request()->is('admin/settings') ? 'active' :'' }}">
                  <i class="nav-icon fas fa-gear"></i>
                  <p>
                    Ustawienia
                  </p>
                </a>
              </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
