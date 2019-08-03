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
              <form action="/karyawan/create" method="get">
                  <td>
                    <button type="submit" class="btn btn-flat btn-success">+ Tambah Karyawan</button>
                  </td>
                </form>
             </div>
            </div>
           <br />
            <table class="table table-bordered table-striped table-responsive-sm" id="datakaryawan"> 
              <thead>
                <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                  <th>No.</th>
                  <th>NIK</th>
                  <th>Nama</th>
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
                      <td>{{ $d->jabatan }}</td>
                      <td>{{ $d->department }}</td>
                      <td>
                        <a href="{{route('karyawan.show',$d->nik)}}" class="btn btn-sm btn-primary">Detail</a>
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
   @endsection
   @section('sweet')
       <script>
         $(document).ready( function () {
           $('#datakaryawan').DataTable();
           });
      </script>
    <script>
        $('.form-delete').submit(function(e){
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
                )
                this.submit();
              }
              else {
                Swal.fire("Dibatalkan", "Data anda masih tersimpan", "error");
            }
          })
        });
    </script>
    <script>
      var isiPesan = '{{Session::get('success') }}';
      var exist = '{{Session::has('success') }}';
      if(exist){
        Swal.fire(
          'Sukses!',
          isiPesan,
          'success'
        )
      }
    </script>
<!-- /.content-header -->
@endsection