@extends('Admin/base')
@section('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection
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

            <table class="table table-bordered" id="myTable"> 
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
                      <td style="text-transform: capitalize">{{ $d->nama }}</td>
                      <td>{{ $d->jenis_kelamin }}</td>
                      <td>{{ $d->tanggal_lahir }}</td>
                      <td>{{ $d->tempat_lahir }}</td>
                      <td>{{ $d->telepon }}</td>
                      <td>{{ $d->jabatan }}</td>
                      <td>{{ $d->department }}</td>
                      <td>
      
                      <form action="{{ route('datakaryawan.destroy', $d->id) }}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                      <a href="{{ route('datakaryawan.edit', $d->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                      <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                      </form>
                      </td>
                    
                </tr>
                @endforeach
            </body>
            </table>
            <br />
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script> 
    <script>
      $(document).ready( function () {
      $('#myTable').DataTable();
      });
    </script>
    <!-- /.content-header -->
@endsection