@extends('Admin/base')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-8 col-md-offset-6">
            <h1 class="m-0 text-dark">Tambah Akses</h1>
            <hr>
				<form action="/datakaryawan" method="post">
					<div class="form-group">
						<label for="nama">NIK :</label>
						<input type="text" class="form-control" id="" name="">
					</div>
							<div class="form-group">
						<label for="nama">Nama :</label>
						<input type="text" class="form-control" id="" name="">
					</div>
							<div class="form-group">
						<label for="nama">Tanggal Lahir :</label>
						<input type="date" class="form-control" id="" name="">
					</div>
							 <div class="form-group">
						<label for="nama">Jenis Kelamin :</label>
                    <br/>
						<input type="radio" name="">Perempuan<br/>
                        <input type="radio" name="">Laki-laki
					</div>
					<div class="form-group">
					   <label for="nama">Alamat :</label>
					   <input type="address" class="form-control" id="" name="">
				   </div>
				   <div class="form-group">
					  <label for="nama">Departemen :</label>
					  <input type="text" class="form-control" id="" name="">
				  </div>
				 <label for="picture">Foto Profile Karyawan</label>
					<div class="form-group">
						<input type="file" class="form-control" id="file" name="file">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-md btn-primary">Submit</button>
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