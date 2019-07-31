<aside class="main-sidebar sidebar-dark-info elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight" style="margin-left:15px">HRIS Jogja City Mall</span>
  </a>

    <!-- Sidebar -->
    <div class="sidebar">
       <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
           <div class="image">
<<<<<<< HEAD
                <img src="{{DB::table('model_karyawans')->where('nik', '=', Auth::user()->id)->value('file')}}" class="img-circle elevation-3" alt="User Image" style="width:36px;height:36px;border: 1.5px solid">
=======
                <img src="/gm.jpg" class="img-circle elevation-3" alt="User Image">
>>>>>>> 57229c5d9c579948a8cee122e4861d224631bf49
           </div>
        <div class="info">
            <a href="#" class="d-block" style="font-size:14px">Departemen General Manager</a>
        </div>
     </div>

      <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin3" class="nav-link {{ Request::segment(1) === 'admin3' ? 'nav-link active' : null }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard Admin
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview {{ Request::segment(1) === 'cutidiajukan3' ? 'menu-open' : null }}
                  {{ Request::segment(1) === 'cutidone3' ? 'menu-open' : null }}">
            <a href="#" class="nav-link {{ Request::segment(1) === 'cutidiajukan3' ? 'nav-link active' : null }}
                    {{ Request::segment(1) === 'cutidone3' ? 'nav-link active' : null }}">
                  <i class="nav-icon fas fa-folder"></i>
              <p>
                Cuti
                  <i class="right fas fa-angle-left"></i>
              </p>
            </a>
         <ul class="nav nav-treeview">
            <li class="nav-item">
               <a href="/cutidiajukan3" class="nav-link {{ Request::segment(1) === 'cutidiajukan3' ? 'nav-link active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                    <p>Cuti Diajukan</p>
               </a>
             </li>
           <li class="nav-item">
              <a href="/cutidone3" class="nav-link {{ Request::segment(1) === 'cutidone3' ? 'nav-link active' : null }}">
                <i class="far fa-circle nav-icon"></i>
                  <p>Cuti Sudah Diproses</p>
               </a>
            </li>
         </ul>
      </li>
         <li class="nav-item has-treeview {{ Request::segment(1) === 'izindiajukan3' ? 'menu-open' : null }}
                {{ Request::segment(1) === 'izindone3' ? 'menu-open' : null }}">
            <a href="#" class="nav-link {{ Request::segment(1) === 'izindiajukan3' ? 'nav-link active' : null }}
                  {{ Request::segment(1) === 'izindone3' ? 'nav-link active' : null }}">
                <i class="nav-icon fas fa-folder"></i>
               <p>
                Izin
                  <i class="right fas fa-angle-left"></i>
               </p>
           </a>
        <ul class="nav nav-treeview">
           <li class="nav-item">
              <a href="/izindiajukan3" class="nav-link {{ Request::segment(1) === 'izindiajukan3' ? 'nav-link active' : null }}">
                 <i class="far fa-circle nav-icon"></i>
                  <p>Izin Diajukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/izindone3" class="nav-link {{ Request::segment(1) === 'izindone3' ? 'nav-link active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                   <p>Izin Sudah Diproses</p>
                </a>
              </li>
            </ul>
          </li>
              <li class="nav-item">
                <a href="/datakaryawan3" class="nav-link {{ Request::segment(1) === 'datakaryawan3' ? 'nav-link active' : null }}">
                  <i class="fas fa-users nav-icon"></i>
                   <p>Data Karyawan</p>
                </a>
              </li>
            <li class="nav-item">
               <a href="{{ url('/logout') }}" class="nav-link"
                  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                      <i class="far fa-user nav-icon"></i>
                      <p>Logout</p>
               </a>
                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>
           </li>
        </ul>
    </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>