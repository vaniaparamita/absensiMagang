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
            <h1 class="m-0 text-dark">Tambah Akses</h1>
            <hr>
            <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data" id="tambah_users">
			{{ csrf_field() }}	
           
            <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                            <label for="id" class="col-md-4 control-label">ID User :</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control" name="id" value="{{ old('id') }}" required autofocus>

                                @if ($errors->has('id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">ID Departemen :</label>

                            <div class="col-md-6">
                                <input id="id_departemen" type="text" class="form-control" name="id_departemen" value="{{ old('id_departemen') }}" required autofocus>

                                @if ($errors->has('id_departemen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_departemen') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama :</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail :</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

							 <div class="form-group"> 
						<label for="nama" class="col-md-4 control-label">Role :</label>
                    <br/>
                    <div class= "col-md-6">
					<select  class="form-control" name="role">
						<option value="user">User</option>
						<option value="admin">Admin</option>
                        <option value="admin-departemen">Admin Departemen</option>
                        <option value="admin-gm">Admin General Manager</option>
					</select>
                    </div>
					</div>
					
					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password :</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Konfirmasi Password :</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
					
					  <div class="col-md-6 form-group">
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