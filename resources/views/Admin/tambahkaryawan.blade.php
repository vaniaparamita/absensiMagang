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
						<input type="text" class="form-control" id="nik" name="nik" >
					</div>

					<div class="form-group">
						<label for="nama">Nama :</label>
						<input type="text" class="form-control" id="nama" name="nama" style="text-transform: capitalize">
					</div>

					<div class="form-group">
						<label for="nama">Jenis Kelamin :</label><br />
						<div class="form-check">
						<input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin" value="MALE">Laki-Laki<br />
						<input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin" value="FEMALE">Perempuan<br /></div>
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
					  <input type="text" class="form-control"  name="department" id="id_dept" >
					</div>

					  <div class="form-group">
						<label for="id_departemen">Status:</label>
						<input type="text" class="form-control" id="status" name="status">
					  </div>

					  <div class="form-group">
						<label for="nama">Foto :</label>
						<input type="file" class="form-control" id="file" name="file">
					  </div>
				   
					<div class="form-group">
					  <button type="submit" class="btn btn-md btn-primary">Simpan</button>
					  <button type="reset" class="btn btn-md btn-danger">Batalkan</button>
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
@section('sweet')
<script>
	$( function(){
		$.ajax({
			url: "http://127.0.0.1:8000/tambahkaryawan",
			dataType: "json",
			success: function(data){
				console.log(data);
				auto = data;
				$("#id_dept").autocomplete({
					source: data
				});
			} 
		});
})
</script>
@endsection