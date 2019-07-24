@extends('Admin/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-8 col-md-offset-6">
			<h1 class="m-0 text-dark">Edit Karyawan</h1>
			<hr>
			@foreach($data as $d)
            <form action="{{ route('cuti.update', $d->id) }}" method="post" enctype="multipart/form-data" id="edit">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
					<div class="form-group">
						<label for="nama">Nama :</label>
						{{-- <input type="text" class="form-control" id="nik" name="nik" value="{{ $d->nik }}"> --}}
					</div>

					<div class="form-group">
						<label for="nama">Tanggal Mulai :</label>
						{{-- <input type="text" class="form-control" id="nama" name="nama" value="{{ $d->nama }}"> --}}
					</div>

					<div class="form-group">
						<label for="nama">Tanggal Selesai :</label>
						{{-- <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $d->jenis_kelamin }}"> --}}
					</div>

					<div class="form-group">
						<label for="nama">Keterangan :</label>
						{{-- <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $d->tempat_lahir}}"> --}}
					</div>

					<div class="form-group">
						<label for="nama">Tanggung Jawab :</label>
						{{-- <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $d->tanggal_lahir }}"> --}}
					</div>

					<div class="form-group">
					 <label for="nama">Telepon :</label>
					 {{-- <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $d->telepon}} "> --}}
				    </div>

				    <div class="form-group">
					  <label for="nama">Status :</label>
					  {{-- <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $d->jabatan}}"> --}}
				    </div>

				    <div class="form-group">
					  <label for="nama">Surat Cuti :</label>
					  {{-- <input type="text" class="form-control" id="department" name="department" value="{{ $d->department}}"> --}}
					</div>
					
					
				   
					<div class="form-group">
					  <button type="submit" class="btn btn-md btn-primary">Simpan</button>
					  <a class="btn btn-danger" href="{{route('karyawan.index')}}" role="button">Batalkan</a>
					</div>
				</form>
				@endforeach

				
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection
@section('sweet')
    <script>
        $('#edit').submit(function(e){
            e.preventDefault(); 
                Swal.fire(
                    'Sukses!',
                    'Data karyawan berhasil diubah dan diperbaharui.',
                    'success',
              ).then((result)=>{
                if(result.value){
                    this.submit();
                }
              })
            });
    </script>
@endsection