
<aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight" style="margin-left:15px">HRIS Jogja City Mall</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview {{ Request::segment(1) === 'pengajuancuti' ? 'menu-open' : null }}
              {{ Request::segment(1) === 'pengajuanizin' ? 'menu-open' : null }}{{ Request::segment(1) === 'historycuti' ? 'menu-open' : null }}
                  {{ Request::segment(1) === 'historyizin' ? 'menu-open' : null }}">
                    <a href="#" class="nav-link">
                <img src="{{DB::table('model_karyawans')->where('nik', '=', Auth::user()->id)->value('file')}}" class="img-circle elevation-2" alt="User Image" style="border:1px solid">
            <p style="margin-left:5px">
              ADMIN HRD
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pengajuancuti" class="nav-link {{ Request::segment(1) === 'pengajuancuti' ? 'nav-link active' : null }}
                  {{ Request::segment(1) === 'pengajuanizin' ? 'nav-link active' : null }}">
                      <p>
                        Pengajuan Cuti - Izin
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                <a a href="{{route('cutihistoryHRD.index')}}" class="nav-link {{ Request::segment(1) === 'cutihistoryHRD' ? 'nav-link active' : null }}
                    {{ Request::segment(1) === 'izinhistoryHRD' ? 'nav-link active' : null }}">
                 <i class=""></i>
                  <p>Riwayat Cuti - Izin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/logout') }}" class="nav-link"
                      onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                 <p>Logout</p>
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
        </ul>
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
              {{ Request::segment(1) === 'cutidone' ? 'menu-open' : null }}
                  {{ Request::segment(1) === 'detailcuti_hrd' ? 'menu-open' : null }}">
            <a href="#" class="nav-link {{ Request::segment(1) === 'cutidiajukan' ? 'nav-link active' : null }}
              {{ Request::segment(1) === 'cutidone' ? 'nav-link active' : null }}
                  {{ Request::segment(1) === 'detailcuti_hrd' ? 'nav-link active' : null }}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Cuti
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/cutidiajukan" class="nav-link {{ Request::segment(1) === 'cutidiajukan' ? 'nav-link active' : null }}
                  {{ Request::segment(1) === 'cutidiajukan' ? 'nav-link active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cuti Diajukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/cutidone" class="nav-link {{ Request::segment(1) === 'cutidone' ? 'nav-link active' : null }}
                {{ Request::segment(1) === 'cuti' ? 'nav-link active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cuti Sudah Diproses</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ Request::segment(1) === 'izindiajukan' ? 'menu-open' : null }}
              {{ Request::segment(1) === 'izindone' ? 'menu-open' : null }}
                  {{ Request::segment(1) === 'detailizin_hrd' ? 'menu-open' : null }}">
            <a href="#" class="nav-link {{ Request::segment(1) === 'izindiajukan' ? 'nav-link active' : null }}
              {{ Request::segment(1) === 'izindone' ? 'nav-link active' : null }}
              {{ Request::segment(1) === 'detailizin_hrd' ? 'nav-link active' : null }}">
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
                <a href="/datakaryawan" class="nav-link {{ Request::segment(1) === 'datakaryawan' ? 'nav-link active' : null }}
                  {{ Request::segment(1) === 'karyawan' ? 'nav-link active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Karyawan</p>
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