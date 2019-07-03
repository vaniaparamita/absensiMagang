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
              <h2 class="box-title">Daftar Karyawan</h2>
              <br />
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
            <br />
            <div class="box-tools pull-right">
            <ul class="pagination" style="float:right">
              <li class="paginate_button page-item previous" id="example2_previous">
                <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                <li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                <li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
              </ul>
              </div>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection