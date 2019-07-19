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
             </div>
            </div>
           <br />
            @if(session('alert-success-store'))
            <div class="alert alert-success alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <h5>
                   <i class="icon fas fa-check"></i>
                     Success!
                </h5>
                     Data baru berhasil ditambahkan    
            </div>
            @endif
            @if(session('alert-success-update'))
             <div class="alert alert-success alert-dismissible">
    				   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <h5>
                  <i class="icon fas fa-check"></i>
                    Success!
                  </h5>
                    Data baru berhasil diubah 
              </div>
            @endif
            @if(session('alert-success-delete'))
             <div class="alert alert-success alert-dismissible">
    				   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 <h5>
                   <i class="icon fas fa-check"></i>
                     Success!
                 </h5>
                     Data berhasil dihapuskan 
             </div>
            @endif
            <table class="table table-bordered table-striped table-responsive-xl" id="datakaryawan"> 
              <thead>
                <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                  <th>No.</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Tanggal Lahir</th>
                  <th>Tempat Lahir</th>
                  <th>Telepon</th>
                  <th>Jabatan</th>
                  <th>Departemen</th>
                  <th>ID Departemen</th>
                  <th>Aksi</th>
               </tr>
              </thead>
          <body>
              @php $no = 1; @endphp
                @foreach($data as $d)
                  <tr style="text-transform: uppercase">
                      <td>{{ $no++ }}</td>
                      <td>{{ $d->nik }}</td>
                      <td>{{ $d->nama }}</td>
                      <td>{{ $d->jenis_kelamin }}</td>
                      <td>{{ $d->tanggal_lahir }}</td>
                      <td>{{ $d->tempat_lahir }}</td>
                      <td>{{ $d->telepon }}</td>
                      <td>{{ $d->jabatan }}</td>
                      <td>{{ $d->department }}</td>
                      <td>{{ $d->id_departemen }}</td>
                      <td>
                        <form action="{{route('karyawan.destroy', $d->nik)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                  <a href="{{route('karyawan.edit',$d->nik)}}" class="btn btn-sm btn-primary">Edit</a>
                                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">HAPUS</button>
                        </form>
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
       <script>
         $(document).ready( function () {
           $('#datakaryawan').DataTable();
           });
      </script>
<!-- /.content-header -->
@endsection