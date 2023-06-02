 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/adminlte/dist/img/filkom.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Gudang Jurnal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/adminlte/dist/img/cowok.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link @yield('active-dashboard')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Menu</li>
        
          <li class="nav-item">
            <a href="#" class="nav-link @yield('active-data-master')">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Kelola Data
                <i class="fas fa-caret-down left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/kategori" class="nav-link  @yield('active-kategori')">
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/rak" class="nav-link  @yield('active-rak')">
                  <p>Rak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/penerbit" class="nav-link  @yield('active-penerbit')">
                  <p>Penerbit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/buku" class="nav-link  @yield('active-buku')">
                  <p>Buku</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="/transaksi" class="nav-link @yield('active-transaksi')">
              <i class="fas fa-hands"></i>
              <p>
                Daftar Transaksi
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/chart" class="nav-link @yield('active-chart')">
              <i class="fas fa-chart-bar"></i>
              <p>
                Grafik
              </p>
            </a>
          </li>
         
          @role('admin')
              <li class="nav-header">ADMIN</li>

              <li class="nav-item">
                <a href="/user" class="nav-link @yield('active-user')">
                  <i class="fas fa-users"></i>
                  <p>
                    User
                  </p>
                </a>
              </li>
          @endrole
        </ul>
      </nav>
    </div>
  </aside>