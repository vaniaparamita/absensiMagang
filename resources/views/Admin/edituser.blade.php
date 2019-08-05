<!DOCTYPE html>
<html>
<head>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<meta charset=utf-8 />
</head>
</html>
@extends('Admin/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-8 col-md-offset-6">
		<div class="box box-primary">
              <div class="content-header">
                <div class="container-fluid">
				  <div class="row mb-2">
					  <div class="col-sm-6">
						  <p style="font-size:24px">Edit User Akses</p>
					  </div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right" style="font-size:14px">
							<li class="breadcrumb-item">
								<a href="/useraccess">Akses Karyawan</a>
							</li>
							<li class="breadcrumb-item active">
								Edit User Akses
							</li>
						</ol>
					</div>			
			  	</div>
             </div>
        </div>
			<hr>
			@foreach($data as $d)
            <form action="{{ route('useraccess.update', $d->id) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			
					<div class="form-group">
						<label for="id">NIK :</label>
						<input type="text" class="form-control" id="id" name="id" value="{{ $d->id }}" disabled>
					</div>

					<div class="form-group">
						<label for="id_departemen">ID Departemen :</label>
						<input type="text" class="form-control" id="id_departemen" name="id_departemen" value="{{ $d->id_departemen }}">
					</div>


					<div class="form-group">
						<label for="nama">Nama :</label>
						<input type="text" class="form-control" id="name" name="name" value="{{ $d->name }}">
					</div>

					<div class="form-group">
						<label for="email">Email :</label>
						<input type="text" class="form-control" id="email" name="email" value="{{ $d->email }}">
					</div>

					<div class="form-group">
						<label for="email">Role :</label>
						<input type="text" class="form-control" id="role" name="role" value="{{ $d->role }}">
					</div>

					<div class="form-group">
						<label for="password">Password :</label>
						<input type="text" class="form-control" id="password" name="password" value="{{ $d->password}}">
					</div>

					
					<div class="form-group">
					  <button type="submit" class="btn btn-md btn-primary">Simpan</button>
					  <a class="btn btn-danger" href="{{route('useraccess.index')}}" role="button">Batalkan</a>
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
	<script>
		//buat profile
		$(function () {
			$("#file").change(function () {
				readURL(this);
			});
    	});


    	function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					//alert(e.target.result);
					$('#profile-picture').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
    	}
	</script>
@endsection

