<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url('public') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Tarofurniture</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('public') }}/dist/img/rona.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
          @if(Auth::check())
            {{request()->user()->nama}}
          @elseif(Auth::guard('pembeli')->check())
            {{Auth::guard('pembeli')->user()->nama}}
            <br>Pembeli
          @elseif(Auth::guard('penjual')->check())
            {{Auth::guard('penjual')->user()->nama}}
            <br>Penjual
          @else
            Silahkan login
          @endif
          </a>
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
            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                    Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/admin/produk" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                    Produk
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/kategori" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                    Kategori
                    </p>
                </a>
            </li>
            <li class="nav-item">
              <a href="/admin/user" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                  <p>
                  User
                  </p>
              </a>
            </li>
            <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/supplier" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pelanggan"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelanggan</p>
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