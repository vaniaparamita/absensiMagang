@extends('Admin/base')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2" style="background:white">
        <div class="col-md-8 col-md-offset-6">
			<br />
            <h1 class="m-0 text-dark">Tambah Karyawan</h1>
            <hr>
            <form action="{{ route('karyawan.store') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
					<div class="form-group">
						<label for="nama">NIK :</label>
						<input type="text" class="form-control" id="nik" name="nik">
					</div>

					<div class="form-group">
						<label for="nama">Nama :</label>
						<input type="text" class="form-control" id="nama" name="nama">
					</div>

					<div class="form-group">
						<label for="nama">Jenis Kelamin :</label>
						<input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin">
					</div>

					<div class="form-group">
						<label for="nama">Tempat Lahir :</label>
						<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
					</div>

					<div class="form-group">
						<label for="nama">Tanggal Lahir :</label>
						<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
					</div>

					<div class="form-group">
					 <label for="nama">No Telp :</label>
					 <input type="text" class="form-control" id="telepon" name="telepon">
				    </div>

				    <div class="form-group">
					  <label for="nama">Jabatan:</label>
					  <input type="text" class="form-control" id="jabatan" name="jabatan">
				    </div>

				    <div class="form-group">
					  <label for="nama">Departemen :</label>
					  <input type="text" class="form-control" id="department" name="department">
				    </div>
				   
					<div class="form-group">
					  <button type="submit" class="btn btn-md btn-primary">Save</button>
					  <button type="reset" class="btn btn-md btn-danger">Cancel</button>
					</div>
				</form>
			
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection