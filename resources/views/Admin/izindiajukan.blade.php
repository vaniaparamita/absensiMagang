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

              <h2 class="box-title">Daftar Pengajuan Izin</h2>

             </div>
            </div>
            <table class="table table-bordered">
              <thead>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Akhir</th>
                <th>Keterangan</th>
                <th>Surat Izin</th>
                <th>Akasi</th>
              </tr>
              </thead>
              <tbody>
                @php $no = 1; @endphp
                @foreach($data as $d)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $d->nama }}</td>
                      <td>{{ $d->tanggal_mulai }}</td>
                      <td>{{ $d->tanggal_selesai }}</td>
                      <td>{{ $d->keterangan }}</td>
                      <td>
                      <img width="150px" src="{{ url('uploads/file'.$d->file) }}">
                      </td>
                      
                      <td><a href="#" class=" btn btn-sm btn-primary">Disetujui</a>
                      <a href="#" class=" btn btn-sm btn-danger">Tidak</a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              
            </table>
            <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
          </div><!-- /.col -->
            
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection