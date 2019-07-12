<aside class="main-sidebar sidebar-dark-secondary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link sidebar-dark-primary"> 
      <span class="brand-text font-weight-light-bold">PT. GARUDA MITRA SEJATI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/avatar2.png" class="img-circle elevation-2" alt="User Image" style="width:36px; height:36px; border:1.5px solid">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="font-size:14px; color:black">HRD Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
            <a href="/admin" class="nav-link {{ Request::segment(1) === 'admin' ? 'nav-link active' : null }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview {{ Request::segment(1) === 'cutidiajukan' ? 'menu-open' : null }}
              {{ Request::segment(1) === 'cutidone' ? 'menu-open' : null }}">
            <a href="#" class="nav-link {{ Request::segment(1) === 'cutidiajukan' ? 'nav-link active' : null }}
              {{ Request::segment(1) === 'cutidone' ? 'nav-link active' : null }}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Cuti
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/cutidiajukan" class="nav-link {{ Request::segment(1) === 'cutidiajukan' ? 'nav-link active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cuti Diajukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/cutidone" class="nav-link {{ Request::segment(1) === 'cutidone' ? 'nav-link active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cuti Sudah Diproses</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ Request::segment(1) === 'izindiajukan' ? 'menu-open' : null }}
              {{ Request::segment(1) === 'izindone' ? 'menu-open' : null }}">
            <a href="#" class="nav-link {{ Request::segment(1) === 'izindiajukan' ? 'nav-link active' : null }}
              {{ Request::segment(1) === 'izindone' ? 'nav-link active' : null }}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Izin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/izindiajukan" class="nav-link {{ Request::segment(1) === 'izindiajukan' ? 'nav-link active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Izin Diajukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/izindone" class="nav-link {{ Request::segment(1) === 'izindone' ? 'nav-link active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Izin Sudah Diproses</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ Request::segment(1) === 'datakaryawan' ? 'menu-open' : null }}
                  {{ Request::segment(1) === 'karyawan' ? 'menu-open' : null }} {{ Request::segment(1) === 'useraccess' ? 'menu-open' : null }}
                      {{ Request::segment(1) === 'tambahuser' ? 'menu-open' : null }}">
            <a href="#" class="nav-link {{ Request::segment(1) === 'datakaryawan' ? 'nav-link active' : null }}
                  {{ Request::segment(1) === 'karyawan' ? 'nav-link active' : null }} {{ Request::segment(1) === 'useraccess' ? 'nav-link active' : null }}
                      {{ Request::segment(1) === 'tambahuser' ? 'nav-link active' : null }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Karyawan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/datakaryawan" class="nav-link {{ Request::segment(1) === 'datakaryawan' ? 'nav-link active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Karyawan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('karyawan.create') }}" class="nav-link {{ Request::segment(1) === 'karyawan' ? 'nav-link active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Karyawan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/useraccess" class="nav-link {{ Request::segment(1) === 'useraccess' ? 'nav-link active' : null }}
                {{ Request::segment(1) === 'tambahuser' ? 'nav-link active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Akses Karyawan</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
                <a href="/" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Sign Out</p>
                </a>
              </li>
           </li>
          
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
      <!-- /.sidebar -->
       <script src="/lte/plugins/jquery/jquery.min.js"></script>
          <script>
            $('.nav-item').on('click','li', function(){
              $('.nav-item').removeClass('active');
              $(this).addClass('active');
            });
       </script>
</aside>