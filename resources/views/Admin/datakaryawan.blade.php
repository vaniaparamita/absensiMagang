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
                      <td>
                        <form action="{{route('karyawan.destroy', $d->nik)}}" method="post" id="karyawans">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                  <a href="{{route('karyawan.edit',$d->nik)}}" class="btn btn-sm btn-primary">Edit</a>
                                  <button class="btn btn-sm btn-danger">HAPUS</button>
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
    <script>
        $('#karyawans').submit(function(e){
          e.preventDefault();
          Swal.fire({
            title: 'Apakah anda yakin untuk menghapus data?',
            text : "Data akan hilang secara permanent!",
            type : 'warning',
            showCancelButton : true,
            confirmButtonColor : '#3085d6',
            cancelButtonColor : '#d33',
            cancelButtonText : 'Batalkan',
            confirmButtonText: 'Ya, Hapus Data!'
          }).then((result)=> {
              if (result.value){
                Swal.fire(
                  'Sukses!',
                  'Data anda berhasil dihapus.',
                  'success',
                  4500
                )
                this.submit();
              }
          })
        });
    </script>
<!-- /.content-header -->
@endsection