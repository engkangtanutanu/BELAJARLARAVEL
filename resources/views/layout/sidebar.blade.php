<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Perpustakaan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="" class="d-block"></a>
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
               <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
            <li class="nav-item">
          <a href="{{ asset('film') }}" class="nav-link @if(Request::segment(1) == 'film') active @endif">
             <i class="nav-icon fas fa-film"></i>
                <p>
                Film
                </p>
               </a>
              </li>
                <li class="nav-item">
                    <a href="/genre" class="nav-link @if (Request::segment(1)== 'genre') active @endif ">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Genre
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/cast" class="nav-link @if (Request::segment(1)== 'cast') active @endif">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Cast
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                <form action="{{ route('auth.logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="nav-link btn btn-danger">Logout</button>
          </form>
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