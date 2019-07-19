@extends('Admin/base')
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
              <h2 class="box-title">Daftar Akses Karyawan</h2>
              <form action="/tambahuser" method="get">
                  <td>
                    <button type="submit" class="btn btn-flat btn-success">+ Tambah Akses</button>
                  </td>
                </form>
             </div>
            </div>
            <br />
            <table class="table table-bordered table-responsive-sm" id="datauser">
              <thead>
              <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                <th>No.</th>
                <th>Foto</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Departemen</th>
                <th>Jabatan</th>
                <th>Aksi</th>
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
    <script>
      $(document).ready( function () {
      $('#datauser').DataTable();
      });
    </script>
@endsection