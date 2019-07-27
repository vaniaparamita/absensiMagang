@extends('AdminGM/base3')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-12" style="background:white">
            <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>
              <br />
              
              <h2 class="box-title">Daftar Karyawan</h2>

             </div>
            </div>
            <br />
            <table class="table table-bordered table-responsive-xl" id="table_karyawans">
              <thead>
              <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                <th>No.</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>JK</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Telepon</th>
                <th>Jabatan</th>
                <th>Department</th>
              </tr>
              </thead>
            </table>

          </div><!-- /.col -->  
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script> 
    <script>
      $(document).ready( function () {
      $('#table_karyawans').DataTable();
      });
    </script>
@endsection