@extends('Admin/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-12">
            <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h2 class="box-title">Daftar Karyawan</h2>
        
             </div>
            </div>
            <br />
            <table class="table table-bordered">
              <thead>
              <tr>
                <th>No.</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Telepon</th>
                <th>Jabatan</th>
                <th>Departemen</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <body>
              @php $no = 1; @endphp
                @foreach($data as $d)
                <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $d->nik }}</td>
                      <td>{{ $d->nama_lengkap }}</td>
                      <td>{{ $d->jenis_kelamin }}</td>
                      <td>{{ $d->tanggal_lahir }}</td>
                      <td>{{ $d->tempat_lahir }}</td>
                      <td>{{ $d->telepon }}</td>
                      <td>{{ $d->jabatan }}</td>
                      <td>{{ $d->department }}</td>
                      <td><a href="#" class=" btn btn-sm btn-primary">Edit</a>
                      <a href="#" class=" btn btn-sm btn-secondary">Hapus</a>
                      </td>
                    
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
@endsection