<aside class="main-sidebar sidebar-dark-info elevation-4">
  <!-- Brand Logo -->
  <a href="/admin2" class="brand-link">
      <span class="brand-text font-weight" style="margin-left:15px">HRIS Jogja City Mall</span>
  </a>

    <!-- Sidebar -->
    <div class="sidebar">
       <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview {{ Request::segment(1) === 'pengajuancuti2' ? 'menu-open' : null }}
              {{ Request::segment(1) === 'pengajuanizin2' ? 'menu-open' : null }}{{ Request::segment(1) === 'cutihistoryD' ? 'menu-open' : null }}
                  {{ Request::segment(1) === 'izinhistoryD' ? 'menu-open' : null }}">
                    <a href="#" class="nav-link">
                    <img src="{{DB::table('model_karyawans')->where('nik', '=', Auth::user()->id)->value('file')}}" class="img-circle elevation-2" alt="User Image" style="width:30px;height:30px;border: 1.5px solid">
              <p>
                DEPARTEMEN {{DB::table('departemens')->where('id', '=', Auth::user()->id_departemen)->value('name')}}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pengajuancuti2" class="nav-link {{ Request::segment(1) === 'pengajuancuti2' ? 'nav-link active' : null }}
                  {{ Request::segment(1) === 'pengajuanizin2' ? 'nav-link active' : null }}">
                      <p>
                        Pengajuan Cuti - Izin
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                <a a href="{{route('cutihistoryD.index')}}" class="nav-link {{ Request::segment(1) === 'cutihistoryD' ? 'nav-link active' : null }}
                    {{ Request::segment(1) === 'izinhistoryD' ? 'nav-link active' : null }}">
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
            <a href="/admin2" class="nav-link {{ Request::segment(1) === 'admin2' ? 'nav-link active' : null }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard Admin
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview {{ Request::segment(1) === 'cutidiajukan2' ? 'menu-open' : null }}
                  {{ Request::segment(1) === 'cutidone2' ? 'menu-open' : null }}
                      {{ Request::segment(1) === 'detailcuti' ? 'menu-open' : null }}">
              <a href="#" class="nav-link {{ Request::segment(1) === 'cutidiajukan2' ? 'nav-link active' : null }}
                  {{ Request::segment(1) === 'cutidone2' ? 'nav-link active' : null }}
                      {{ Request::segment(1) === 'detailcuti' ? 'nav-link active' : null }}">
                  <i class="nav-icon fas fa-folder"></i>
              <p>
                  Cuti
                  <i class="right fas fa-angle-left"></i>
              </p>
            </a>
         <ul class="nav nav-treeview">
            <li class="nav-item">
               <a href="/cutidiajukan2" class="nav-link {{ Request::segment(1) === 'cutidiajukan2' ? 'nav-link active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                    <p>Cuti Diajukan</p>
               </a>
             </li>
           <li class="nav-item">
              <a href="/cutidone2" class="nav-link {{ Request::segment(1) === 'cutidone2' ? 'nav-link active' : null }}">
                <i class="far fa-circle nav-icon"></i>
                  <p>Cuti Sudah Diproses</p>
               </a>
            </li>
         </ul>
      </li>
         <li class="nav-item has-treeview {{ Request::segment(1) === 'izindiajukan2' ? 'menu-open' : null }}
                {{ Request::segment(1) === 'izindone2' ? 'menu-open' : null }}
                  {{ Request::segment(1) === 'detailizin' ? 'menu-open' : null }}">
            <a href="#" class="nav-link {{ Request::segment(1) === 'izindiajukan2' ? 'nav-link active' : null }}
                {{ Request::segment(1) === 'izindone2' ? 'nav-link active' : null }}
                  {{ Request::segment(1) === 'detailizin' ? 'nav-link active' : null }}">
                <i class="nav-icon fas fa-folder"></i>
               <p>
                Izin
                  <i class="right fas fa-angle-left"></i>
               </p>
           </a>
        <ul class="nav nav-treeview">
           <li class="nav-item">
              <a href="/izindiajukan2" class="nav-link {{ Request::segment(1) === 'izindiajukan2' ? 'nav-link active' : null }}">
                 <i class="far fa-circle nav-icon"></i>
                    <p>Izin Diajukan</p>
                </a>
              </li>
            <li class="nav-item">
              <a href="/izindone2" class="nav-link {{ Request::segment(1) === 'izindone2' ? 'nav-link active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                    <p>Izin Sudah Diproses</p>
                </a>
              </li>
            </ul>
          </li>
              <li class="nav-item">
                <a href="/datakaryawan2" class="nav-link {{ Request::segment(1) === 'datakaryawan2' ? 'nav-link active' : null }}">
                  <i class="fas fa-users nav-icon"></i>
                   <p>Data Karyawan</p>
                </a>
              </li>
           </li>
        </ul>
    </nav>
      <!-- /.sidebar-menu -->
  </div>
    <!-- /.sidebar -->
</aside>