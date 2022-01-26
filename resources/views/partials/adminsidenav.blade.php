
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
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
            <a href="{{route('admin.home')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
        </li>
        
        <li class="nav-item">
            <a href="{{route('admin.admin')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Admins 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.admin')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.register')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Register Interests 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.register')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
          
              
            </ul>
          </li>
          
</ul>
          

</nav>
</div>
</aside>