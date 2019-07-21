@extends('AdminDepartemen/base2')
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
              <tr class="table-secondary" style="tet-align:center; text-transform:uppercase">
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
              <body>
              @php $no = 1; @endphp
                @foreach($data as $d)
                <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $d->nik }}</td>
                      <td style="text-transform: capitalize">{{ $d->nama }}</td>
                      <td>{{ $d->jenis_kelamin }}</td>
                      <td>{{ $d->tanggal_lahir }}</td>
                      <td>{{ $d->tempat_lahir }}</td>
                      <td>{{ $d->telepon }}</td>
                      <td>{{ $d->jabatan }}</td>
                      <td>{{ $d->department }}</td>
                     
                </tr>
                @endforeach
            </body>
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